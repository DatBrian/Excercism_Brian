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