<?php

//####################### GENERAL
//"$" para indicar una variable, seguido del nombre de la variable: $nombre_variable
//No se declara el tipo de la variable, PHP "detecta" si es string, int, objeto...

/* 
Rules for PHP variables:
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
*/

        $string = "Carlos: ";
        $int = 11;
        $float = 11.11;

        echo "Tú eres " . $string . ($int +  $float); //Carlos: 22.11


//############################################# HP Variables Scope
//##################### GLOBAL
// ➤Una variable fuera de la función, será GLOBAL y solo se accede fuera de la funcion

        $x = 5; // global scope 

        function myTest() {  
            echo "<p>Variable x inside function is: $x</p>"; // using x inside this function will generate an error
        }     

        myTest(); //El resultado sera un ERROR, porque la funcion está usando la variable global
        echo "<p>Variable x outside function is: $x</p>"; //Será EXITOSO porque usa la variable fuera de la función


//##################### LOCAL
// ➤ Una variable DENTRO de la función, será LOCAL y solo se accede DENTRO de la funcion

        function myTestLocal() {
            $xL = 5; // local scope
            echo "<p>LOCAL Variable x inside function is: $xL</p>";
        }
        myTestLocal(); //Correcto        
        echo "<p>LOCAL Variable x outside function is: $xL ERROR</p> ";// using x outside the function will generate an error


//##################### global KEYWORD
// ➤"global" se usa para acceder a variables globales (fuera de la funcion) para usar dentro de la función

        $xgk = 5;
        $ygk = 10;

        function myTestGlobalK() {
            global $xgk, $ygk;
            $ygk = $xgk + $ygk;
        }

        myTestGlobalK();

        echo "<br> Resultado prueba global KEYWORD: " . $ygk; // outputs 15



//##################### $GLOBALS[index] 
// ➤Otra forma de acceder a variables globales

        $xgi = 111;
        $ygi = 35;

        function myTestgi() {
            $GLOBALS['ygi'] = $GLOBALS['xgi'] + $GLOBALS['ygi'];
        }

        myTestgi();
        echo "<br> Resultado prueba GLOBALS[index]: " . $ygi; // outputs 146


//##################### static KEYWORD
// ➤ Variable local que no se elimina
    
        function myTestStatic() {
            static $xStatic;
            echo "<br>".$xStatic;
            $xStatic++;
        }

        myTestStatic(); //0
        myTestStatic(); //1
        myTestStatic(); //2
        

//  ➤Variable global que no se elimina

        static $xStatic2 = 0;

            function myTestStatic2() {
                global $xStatic2;
                echo "<br>".$xStatic2;
                $xStatic2++;
            }

            myTestStatic2(); //0
            myTestStatic2(); //1
            myTestStatic2(); //2
            echo "<BR>";

//  ➤Eliminar Variable global dentro de una funcion, se usa unset(GLOBALS[index])
        $bar = "algo"; 

        function foo() 
        {
            unset($GLOBALS['bar']);
        }

        foo();
        echo $bar; //ERROR porque la variable ya fue eliminada 


//  ➤Si se usa unset con global KEYWORD, la variable no se eliminará  
        $bar2 = "algo";

        function foo2() 
        {
            global $bar2;
            unset($bar2);
        }
        
        foo2();
        echo $bar2; //"algo"

?>