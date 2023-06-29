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