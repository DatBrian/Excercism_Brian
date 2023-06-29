<?php
declare(strict_types=1);
class Tournament
{
    protected array $teams = [];
    public function tally(string $scores): string
    {
        $this->recordGames($scores);
        $this->sortTeams();
        $table = new Table;
        $table->addRow(['Team', 'MP', 'W', 'D', 'L', 'P']);
        foreach($this->teams as $team => $games) {
            $table->addRow([
                $team,
                $games->MP(), 
                $games->W(),
                $games->D(),
                $games->L(),
                $games->P(),
            ]);
        }
        return $table->print();
    }
    protected function recordGames(string $scores): void
    {        
        if (empty($scores)) {
            return;
        }
        foreach (explode("\n", $scores) as $score) {
            [$a, $b, $result] = explode(';', $score);
            match ($result) {
                'win' => $this->win($a, $b),
                'loss' => $this->win($b, $a),
                'draw' => $this->draw($a, $b),
            };
        }
    }
    protected function draw(string $a, string $b): void
    {
        $this->team($a)->draw();
        $this->team($b)->draw();
    }
    protected function win(string $a, string $b): void
    {
        $this->team($a)->win();
        $this->team($b)->lose();
    }
    protected function team(string $name): Games
    {    
        if (!isset($this->teams[$name])) {
            $this->teams[$name] = new Games;
        }
        return $this->teams[$name];
    }
    protected function sortTeams(): void
    {
        uksort($this->teams, function($a, $b): int {
            if ($this->team($a)->P() === $this->team($b)->P()) {
                return strcasecmp($a, $b);
            }
            return ($this->team($a)->P() < $this->team($b)->P()) ? 1 : -1;
        });
    }
}
class Table 
{
    protected array $rows = [];
    public function addRow(array $data): void
    {
        $this->rows[] = $data; 
    }
    public function print()
    {
        return implode("\n", $this->rows());
    }
    protected function rows()
    {
        return array_map(fn ($row) => $this->row($row), $this->rows);
    }
    protected function row(array $row): string 
    {
        $label = array_shift($row);
        return implode(" | ", [$this->label($label), ...$this->columns($row)]);
    }
    protected function label(string $label): string
    {
        return str_pad($label, 30);
    }
    protected function columns(array $columns): array 
    {
        return array_map(fn ($column) => $this->column("{$column}"), $columns);
    }
    protected function column(string $column): string 
    {
        return str_pad($column, 2, ' ', STR_PAD_LEFT);
    }
}
class Games 
{
    protected $W = 0;
    protected $D = 0;
    protected $L = 0;
    public function win(): int
    {
        return $this->W++;
    }
    public function draw(): int
    {
        return $this->D++;
    }
    public function lose(): int
    {
        return $this->L++;
    }
    public function W(): int
    {
        return $this->W;
    }
    public function D(): int
    {
        return $this->D;
    }
    public function L(): int
    {
        return $this->L;
    }
    public function P(): int
    {
        return ($this->W * 3) + $this->D;
    }
    public function MP(): int
    {
        return $this->W + $this->D + $this->L;
    }
}

?>