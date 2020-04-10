<?php

//##################### TIPOS DE DATOS
/*
    PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
*/



// ➤ STRING
        $x = "Hello world!";
        $y = 'Hello world!';
        echo $x;
        echo "<br>";



/* ➤ INTEGER
    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    Rules for integers:

    An integer must have at least one digit
    An integer must not have a decimal point
    An integer can be either positive or negative
    Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
*/
        $x2 = 11; //-11 negativo, 011 octal, 0x1A hexadecimal, 0b11 binario
        var_dump($x2); //int(11)
        echo "<br>";
        //NOTA: si el número sobrepasa el limite de un INT, se interpretará como FLOAT




 
/* ➤ FLOAT
    A float (floating point number) is a number with a decimal point or a number in exponential form.
*/
        $x3 = 111.778787112;
        var_dump($x3); //float(111.778787112)
        echo "<br>";





/* ➤ BOLLEAN
    A Boolean represents two possible states: TRUE or FALSE.
*/
        $xt = true;
        $xf = false;
        var_dump($xt); //bool(true) 
        var_dump($xf); //bool(false)
        echo "<br>";





 /* ➤ ARRAY
    An array stores multiple values in one single variable..
*/
        //Array sin clave
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars); //array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
        echo "<br>";       


        //Array con clave
        $arrayCC = [
            "a" => "baaaaaaar",
            "b" => "foooooooossssssssss",
        ];
        echo $arrayCC['b'];
        echo "<br>";

        //Array con diferentes claves
        $arrayCAC=[
            "1" => "baaaaaaar",
            "b" => "foooooooossssssssss",
            true => "foooooooossssssssssssssddddd",
            1.5 => "foooooooossssssssssfffffaff",
        ];

        echo $arrayCAC["1"];
        echo "<br>";





 /* ➤ OBJETOS
    An array stores multiple values in one single variable..
*/
        //Array sin clave
        class Car{     
               

            function Car() {
                $this->model = "VW";
                $this->ej = "aaaaaa";
            }
        }
        
        // create an object
        $herbie = new Car();
        
        // show object properties
        echo $herbie->model;
        echo $herbie->ej;


        

 /* ➤ CONSTANTES
 Las constantes son globales y pueden usarse en todo el script
*/

        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;

        //Añadir true para definirla como case-insensitive
        define("GREETINGS", "Welcome to W3Schools.com!", true);
        echo greetings;
?>