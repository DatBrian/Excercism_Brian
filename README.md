# Ejercicios PHP página excercism 

### En el actual repositorio se encuentran los ejercicios de **PHP** de la página **excercism**, se irán subiendo a medida que se realicen hasta terminar con todos y a su vez se actualizará la documentación. 

---

## Visualización:

Cada ejercicio se realizó en el mismo archivo [excercise.php](excercise.php) pero están separados por los commits por lo que si se visualiza el archivo solo se verá el último ejercicio, para ver todos los ejercicios se debe abrir la ventana de commits donde se encontarán todos los puntos realizados.

---

## Ejercicios:

-  **Hello World** :
    El ejercicio introductorio clásico. Simplemente di "¡Hola, Mundo!".

    "¡Hola, Mundo!" es el primer programa tradicional para comenzar a programar en un nuevo lenguaje o entorno.

    Los objetivos son simples:

    - Escribir una función que retorne la cadena "¡Hola, Mundo!".
    - Ejecutar el conjunto de pruebas y asegurarse de que sea exitoso.
    - Enviar tu solución y verificarla en el sitio web.

- **Reverse String**:
    Simplemente aplicarle un reverse a un string.

- **Resistor Color**:
    Si quieres construir algo usando una Raspberry Pi, probablemente necesitarás resistencias. Para este ejercicio, necesitas saber dos cosas sobre ellas:

    Cada resistencia tiene un valor de resistencia.
    Las resistencias son pequeñas, tan pequeñas de hecho que si imprimieras el valor de resistencia en ellas, sería difícil de leer.
    Para resolver este problema, los fabricantes imprimen bandas de colores codificadas en las resistencias para indicar sus valores de resistencia. Cada banda tiene una posición y un valor numérico.

    Las primeras 2 bandas de una resistencia tienen un esquema de codificación simple: cada color se mapea a un solo número.

    En este ejercicio, vas a crear un programa útil para que no tengas que recordar los valores de las bandas.

    Estos colores se codifican de la siguiente manera:

    - Negro: 0
    - Marrón: 1
    - Rojo: 2
    - Naranja: 3
    - Amarillo: 4
    - Verde: 5
    - Azul: 6
    - Violeta: 7
    - Gris: 8
    - Blanco: 9

    El objetivo de este ejercicio es crear una forma:

    para buscar el valor numérico asociado a una banda de color particular
    para listar los diferentes colores de las bandas
    Las mnemotécnicas mapean los colores a los números, que, cuando se almacenan en un arreglo, casualmente se mapean a su índice en el arreglo: Better Be Right Or Your Great Big Values Go Wrong (Es mejor estar correcto o tus grandes valores van a estar mal).

- **Hamming**:

    Calcula la distancia de Hamming entre dos cadenas de ADN.

    Tu cuerpo está compuesto por células que contienen ADN. Estas células se desgastan regularmente y necesitan ser reemplazadas, lo cual logran dividiéndose en células hijas. De hecho, ¡el cuerpo humano promedio experimenta alrededor de 10 billones de divisiones celulares en toda una vida!

    Cuando las células se dividen, su ADN también se replica. A veces, durante este proceso, ocurren errores y se codifican fragmentos de ADN con información incorrecta. Si comparamos dos cadenas de ADN y contamos las diferencias entre ellas, podemos ver cuántos errores ocurrieron. Esto se conoce como "distancia de Hamming".

    Leemos el ADN utilizando las letras C, A, G y T. Dos cadenas podrían lucir así:

    GAGCCTACTAACGGGAT
    CATCGTAATGACGGCCT
    ^ ^ ^  ^ ^    ^^
    Tienen 7 diferencias y, por lo tanto, la distancia de Hamming es 7.

    La distancia de Hamming es útil para muchas cosas en la ciencia, no solo en biología, por lo que es una frase importante de conocer :)

    La distancia de Hamming solo está definida para secuencias de igual longitud, por lo que intentar calcularla entre secuencias de diferentes longitudes no debería funcionar. El manejo general de esta situación (por ejemplo, lanzar una excepción o devolver un valor especial) puede variar entre los lenguajes de programación.

- **Gigasecond**:
    La forma en que medimos el tiempo es un tanto confusa. Tenemos 60 segundos en un minuto y 60 minutos en una hora. Esto proviene de la antigua Babilonia, donde utilizaban 60 como base para su sistema numérico. Tenemos 24 horas en un día, 7 días en una semana, ¿y cuántos días en un mes? Bueno, la cantidad de días en un mes depende no solo del mes en sí, sino también del tipo de calendario que se utiliza en el país en el que vives.

    ¿Qué tal si, en cambio, utilizamos solo segundos para expresar intervalos de tiempo? Entonces podemos utilizar los prefijos del sistema métrico para escribir grandes cantidades de segundos de una manera más comprensible.

    Una receta de cocina podría indicar que debes dejar que los brownies se cocinen en el horno durante dos kilosegundos (eso es dos mil segundos).
    Quizás tú y tu familia viajen a algún lugar exótico durante dos megasegundos (eso son dos millones de segundos).
    Y si tú y tu cónyuge estuvieron casados durante mil millones de segundos, celebrarían su aniversario de un gigasegundo.

    **Nota**:
    Si alguna vez colonizamos Marte u otro planeta, medir el tiempo se volverá aún más confuso. Si alguien dice "año", ¿se refieren a un año en la Tierra o a un año en Marte?

    La idea de este ejercicio proviene de la novela de ciencia ficción "Un abismo en el cielo" del autor Vernor Vinge. En ella, el autor utiliza el sistema métrico como base para las medidas de tiempo.

    Instrucciones
    Tu tarea es determinar la fecha y hora un gigasegundo después de una fecha específica.

    Un gigasegundo es mil millones de segundos. Es un uno seguido de nueve ceros.

    Si naciste el 24 de enero de 2015 a las 22:00 (10:00:00 p. m.), entonces tendrías un gigasegundo de edad el 2 de octubre de 2046 a las 23:46:40 (11:46:40 p. m.).

- **Tournament**:
    Calcula los resultados de una pequeña competencia de fútbol.

    Basándote en un archivo de entrada que contiene qué equipo jugó contra qué y cuál fue el resultado, crea un archivo con una tabla como esta:

    Equipo                        | PJ |  G |  E |  P |  Pts
    Devastating Donkeys           |  3 |  2 |  1 |  0 |   7
    Allegoric Alaskans            |  3 |  2 |  0 |  1 |   6
    Blithering Badgers            |  3 |  1 |  0 |  2 |   3
    Courageous Californians       |  3 |  0 |  1 |  2 |   1

    ¿Qué significan estas abreviaciones?

    PJ: Partidos Jugados
    G: Partidos Ganados
    E: Partidos Empatados
    P: Partidos Perdidos
    Pts: Puntos
    Una victoria otorga 3 puntos a un equipo. Un empate otorga 1 punto. Una derrota no otorga puntos (0).

    Los resultados deben estar ordenados por puntos de forma descendente. En caso de empate, los equipos se ordenan alfabéticamente.

    Entrada
    Tu programa de recuento recibirá una entrada que se verá así:

    Allegoric Alaskans;Blithering Badgers;victoria
    Devastating Donkeys;Courageous Californians;empate
    Devastating Donkeys;Allegoric Alaskans;victoria
    Courageous Californians;Blithering Badgers;derrota
    Blithering Badgers;Devastating Donkeys;derrota
    Allegoric Alaskans;Courageous Californians;victoria
    El resultado del partido se refiere al primer equipo mencionado. Entonces, esta línea:

    Allegoric Alaskans;Blithering Badgers;victoria
    significa que los Allegoric Alaskans vencieron a los Blithering Badgers.

    Esta línea:

    Courageous Californians;Blithering Badgers;derrota
    significa que los Blithering Badgers vencieron a los Courageous Californians.

    Y esta línea:

    Devastating Donkeys;Courageous Californians;empate
    significa que los Devastating Donkeys y los Courageous Californians empataron.

- **Simple Cipher**:
    Instrucciones:
    Implementa un cifrado por desplazamiento simple como el Cifrado César y un cifrado por sustitución más seguro.

    Paso 1:
    "Si tenía algo confidencial que decir, lo escribía en clave, es decir, cambiando el orden de las letras del alfabeto de tal manera que no se pudiera formar ninguna palabra. Si alguien desea descifrarlos y comprender su significado, debe sustituir la cuarta letra del alfabeto, es decir, D, por A, y así sucesivamente con las demás letras". - Suetonio, Vida de Julio César

    Los cifrados son algoritmos muy sencillos que nos permiten renderizar el texto menos legible, pero que aún permiten un descifrado fácil. Son vulnerables a muchas formas de criptoanálisis, pero tenemos suerte de que, en general, nuestras hermanas pequeñas no sean criptoanalistas.

    El Cifrado César se utilizaba para algunos mensajes de Julio César que se enviaban lejos. Julio César sabía que el cifrado no era muy bueno, pero tenía una ventaja en ese aspecto: casi nadie sabía leer bien. Por lo tanto, incluso estar un par de letras fuera de lugar era suficiente para que la gente no pudiera reconocer las pocas palabras que conocían.

    Tu tarea es crear un cifrado por desplazamiento simple, como el Cifrado César. Esta imagen es un gran ejemplo del Cifrado César:

    [Cifrado César](https://es.wikipedia.org/wiki/Cifrado_C%C3%A9sar#/media/Archivo:Caesar_cipher_left_shift_of_3.svg)

    Por ejemplo:

    Dando "iamapandabear" como entrada a la función de codificación (encode) devuelve el cifrado "ldpdsdqgdehdu". Lo suficientemente oscuro para mantener nuestro mensaje en secreto durante el tránsito.

    Cuando "ldpdsdqgdehdu" se introduce en la función de decodificación (decode), devolvería el original "iamapandabear", permitiendo que tu amigo lea tu mensaje original.

    Paso 2:
    Sin embargo, los cifrados por desplazamiento no son divertidos cuando tu hermana menor lo descubre. Intenta modificar el código para permitirnos especificar una clave y usarla como distancia de desplazamiento. Esto se llama un cifrado por sustitución.

    Aquí tienes un ejemplo:

    Dada la clave "aaaaaaaaaaaaaaaaaa", codificar la cadena "iamapandabear" devolvería el original "iamapandabear".

    Dada la clave "ddddddddddddddddd", codificar nuestra cadena "iamapandabear" devolvería la versión oscurecida "ldpdsdqgdehdu".

    En el ejemplo anterior, hemos establecido a = 0 para el valor de la clave. Entonces, cuando se añade el texto plano a la clave, obtenemos el mismo mensaje de salida. Por lo tanto, "aaaa" no es una clave ideal. Pero si establecemos la clave en "dddd", obtendríamos lo mismo que en el Cifrado César.

    Paso 3:
    El eslabón más débil en cualquier cifrado es el ser humano. Hagamos que tu cifrado por sustitución sea un poco más tolerante a errores al proporcionar una fuente de aleatoriedad y asegurarnos de que la clave cont

    enga solo letras minúsculas.

    Si alguien no presenta una clave en absoluto, genera una clave verdaderamente aleatoria de al menos 100 caracteres alfanuméricos de longitud.

    Extensiones:
    Los cifrados por desplazamiento funcionan al hacer que el texto sea ligeramente extraño, pero son vulnerables al análisis de frecuencia. Los cifrados por sustitución ayudan con eso, pero aún son muy vulnerables cuando la clave es corta o si se preservan los espacios. Más adelante, verás una solución a este problema en el ejercicio "crypto-square".

- **High Scores**:

    Tu tarea es construir un componente de puntuación alta para el clásico juego Frogger, uno de los juegos más vendidos y adictivos de todos los tiempos, y un clásico de la era de los arcades. Tu tarea es escribir métodos que devuelvan la puntuación más alta de la lista, la puntuación agregada más reciente y las tres puntuaciones más altas.

- **Bob**:

    Bob es un adolescente despreocupado. En una conversación, sus respuestas son muy limitadas.

    Bob responde "Claro." si le haces una pregunta, como "¿Cómo estás?".

    Él responde "¡Whoa, cálmate!" si LE GRITAS (en mayúsculas).

    Él responde "Tranquilo, ¡sé lo que estoy haciendo!" si le gritas una pregunta.

    Él dice "¡Está bien, sé así!" si te diriges a él sin decir nada en realidad.

    Él responde "Lo que sea." a cualquier otra cosa.

    La pareja de conversación de Bob es un purista cuando se trata de comunicación escrita y siempre sigue las reglas normales de puntuación de oraciones en inglés.

    Las pruebas comentadas al final de bob_test.php son objetivos adicionales, son opcionales. Puede ser más fácil resolverlos si estás utilizando las funciones de mb_string, que no se instalan de forma predeterminada en cada versión de PHP.

- **RNA Transcription**:
    Trabajas para una empresa de bioingeniería especializada en el desarrollo de soluciones terapéuticas.

    Tu equipo acaba de recibir un nuevo proyecto para desarrollar una terapia dirigida para un tipo raro de cáncer.

    Nota
    Todo es muy complicado, pero la idea básica es que a veces el cuerpo de las personas produce demasiada cantidad de una proteína específica. Eso puede causar todo tipo de problemas.

    Pero si puedes crear una molécula muy específica (llamada micro-ARN), puedes evitar que se produzca la proteína.

    Esta técnica se llama Interferencia de ARN.

    Instrucciones
    Tu tarea es determinar el complemento de ARN de una secuencia de ADN dada.

    Tanto las hebras de ADN como las de ARN son una secuencia de nucleótidos.

    Los cuatro nucleótidos que se encuentran en el ADN son adenina (A), citosina (C), guanina (G) y timina (T).

    Los cuatro nucleótidos que se encuentran en el ARN son adenina (A), citosina (C), guanina (G) y uracilo (U).

    Dada una hebra de ADN, su hebra de ARN transcrita se forma reemplazando cada nucleótido con su complemento:

    G -> C
    C -> G
    T -> A
    A -> U

- **Luhn**:

    Dado un número, determina si es válido según la fórmula de Luhn.

    El algoritmo de Luhn es una fórmula de suma de verificación simple utilizada para validar una variedad de números de identificación, como los números de tarjetas de crédito y los Números de Seguro Social en Canadá.

    La tarea es verificar si una cadena dada es válida.

    Validación de un número
    Las cadenas de longitud igual o menor a 1 no son válidas. Se permiten espacios en la entrada, pero deben eliminarse antes de la verificación. Todos los demás caracteres que no sean dígitos están prohibidos.

    Ejemplo 1: número de tarjeta de crédito válido
    4539 3195 0343 6467
    El primer paso del algoritmo de Luhn es duplicar cada segundo dígito, comenzando desde la derecha. Duplicaremos

    4_3_ 3_9_ 0_4_ 6_6_
    Si el doble del número resulta en un número mayor que 9, entonces se resta 9 del producto. Los resultados de nuestra duplicación son:

    8569 6195 0383 3437
    Luego, sumamos todos los dígitos:

    8+5+6+9+6+1+9+5+0+3+8+3+3+4+3+7 = 80
    Si la suma es divisible de manera uniforme por 10, entonces el número es válido. ¡Este número es válido!

    Ejemplo 2: número de tarjeta de crédito inválido
    8273 1232 7352 0569
    Duplicamos los segundos dígitos, comenzando desde la derecha:

    7253 2262 5312 0539
    Sumamos los dígitos:

    7+2+5+3+2+2+6+2+5+3+1+2+0+5+3+9 = 57
    57 no es divisible de manera uniforme por 10, por lo que este número no es válido.

- **Isogram**:

    Determina si una palabra o frase es un isograma.

    Un isograma (también conocido como una "palabra sin patrón") es una palabra o frase sin letras repetidas, aunque se permiten que aparezcan múltiples espacios y guiones.

    Ejemplos de isogramas:

    lumberjacks
    background
    downstream
    six-year-old
    Sin embargo, la palabra isograms no es un isograma, porque la letra "s" se repite.