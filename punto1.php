<?php 

/* 
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    //                                           Pregunta numero 1                                          //
    //                                                                                                      //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    Escribir un programa en PHP que imprima una X construida a base de la letra X y utilizar el        
    carácter de subrayado como espacio. 
    El tamaño de la x se basa en una variable n que               
    indicará el tamaño de la letra para imprimir (en una matriz de n x n). Por ejemplo, para n = 5    
    se obtiene:

            X___X
            _X_X_
            __X__
            _X_X_
            X___X
            
    y para n=6 se obtiene:

            X____X
            _X__X_
            __XX__
            __XX__
            _X__X_
            X____X

    Si n es igual a cero imprimir "ERROR"

    El código para el tamaño de n ya está ahí, puede editarlo para probar con otros valores y puede hacer 
    clic en el botón de actualización junto a él para volver al valor original que se utiliza para validar
    su código durante la prueba. Tenga en cuenta que el código debe imprimir los resultados exactamente como
    se muestra con el fin de que la pregunta sea considerada valida durante la prueba (El caracter "X" en mayúscula
    y el guion bajo "_" para los espacios)   
*/

    $n =5;

    echo "Prueba con el valor n=5";
    echo "<br>";

    
if($n == 0){
    echo "ERROR";
}

for($row = 1;
    $row <=$n;
    $row++ )
{
    for($column = 1;
        $column <= $n;
        $column++)
    {
        if((
        ($column == $n or $column == 1) and 
        ($row == 1 or $row==5)) or (($column == 2 or $column == 4 ) and
        ($row == 2 or $row == 4)) or ($column == 3 and $row == 3))
        {
            echo "X";
        }
        else{
            echo "_";
        }
    }
    echo "<br>";
}

//Aca empiesa con el valor n=6 y cambie la variable para evitar conflicto se llama $m=6 

    echo "<br>";
    echo "Prueba con el valor n=6";
    echo "<br>";

    $m=6;
    
if($m == 0){
    echo "ERROR";
}

for($row = 1;
    $row <= $m;
    $row++ )
{
    for($column = 1;
        $column <= $m;
        $column++ )
    {
        if(

            /* column parte izquierta y el centro termina en 4 = 3 y las filas row se repite el codigo de columnas a fechas */

        (($column == $m or $column == 1) and ($row == 1 or $row == 6)) or 
        (($column == 5 or $column == 2) and ($row == 5 or $row == 2)) or
        (($column == 4 or $column == 3 ) and ($row == 4 or $row == 3)) or
        (($column == 4 or $column == 3) and ($row == 4 or $row == 3))

        )
        
        {
            echo "X";
        }
        else{
            echo "_";
        }
    }
    echo "<br>";
}

?>




