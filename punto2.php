<?php 

/* 
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    //                                           Pregunta numero 2                                          //
    //                                                                                                      //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    Tienes un arreglo (llamado myArray) con 10 elementos (enteros en el rango de 1 a 9).
    Escribe un programa en PHP que imprima el número que tiene más ocurrencias
    consecutivas en el arreglo y también imprimir la cantidad de veces que aparece en la
    secuencia.

    El código que llena el arreglo ya esta escrito, pero puedes editarlo para probar con otros
    valores. Con el botón de refrescar puedes recuperar el valor original que sera utilizado
    para evaluar la pregunta como correcta o incorrecta durante la ejecución.

    Su programa debe analizar el arreglo de izquierda a derecha para que en caso de que dos
    números cumplan la condición, el que aparece por primera vez de izquierda a derecha
    será el que se imprimirá. La salida de los datos para el arreglo en el ejemplo
    (1,2,2,5,4,6,7,8,8,8) sería la siguiente:

    Numero de repeticiones: 3
    Número que se repite: 8

    En el ejemplo, la secuencia mas larga la tiene el numero 8 con una secuencia de tres ochos
    seguidos. Tenga en cuenta que el código que escriba debe imprimir los resultados
    exactamente como se muestra con el fin de que la pregunta sea considerada válida.

    El código para declarar y poblar myArray ya está ahí, puede editarlo para probar con otros
    valores y puede hacer clic en el botón de actualizar junto a él para volver al valor original
    que se utilizará para validar su código durante la prueba.
    Hacer la prueba con este valor $myArray = array(1,2,2,4,5,6,7,8,8,8); */

// Array ya establecido

$myArray = array(1,2,2,4,5,6,7,8,8,8);

// Se crea una variable nueva y se ejecuta el count_ values.

$resul = array_count_values($myArray);

// Se aplica el arsort para ordenar valores de forma asendente 

arsort($resul);

// Se crean variables para capturar los resultados 

$ocurrencias = reset($resul); 
$aparece = key($resul); 

echo "Forma uno de mostar resultados de MyArray"."<br><br>";

echo "<br>";

 echo "Numero de repeticiones: ".$ocurrencias."<br>";
 echo "Número que se repite: ".$aparece;

 // Esta es otra forma de mostrar la repuesta y tambie es funcional.


echo "<br><br><br>";

echo "Otra forma de mostar el punto seria: "."<br>";

echo "<br>";

echo "El numero: ".$aparece ." es el numero que mas aparece y se repite: ".$ocurrencias.
" veces en la secuencia de numeros de MyArray.";

?>