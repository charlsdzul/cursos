<?php 


// Busca los caracteres señalados, en un string
echo preg_match("/lo/","carlos")."<br>"; //1
echo preg_match("/to/","carlos antonio")."<br>"; //1
echo preg_match("/los/","carlos")."<br>"; //1
echo preg_match("/os/","carlos")."<br>"; //0
echo "<br>";

//Uso de ^ Busca el string al inicio
echo preg_match("/^CA/", "Carlos Antonio")."<br>"; // 0
echo preg_match("/^Ca/", "Carlos Antonio")."<br>"; // 1
echo "<br>";

// Uso de $  Busca el string al final
echo preg_match("/tonio$/", "Carlos Antonio")."<br>"; // 1
echo preg_match("/Tonio$/", "Carlos Antonio")."<br>"; // 0
echo "<br>";

//Uso de . A period (.) in a regular expression matches any single character:
echo preg_match("/Ca.los/", "Carlos Antonio")."<br>"; // 1
echo preg_match("/Carlo./", "Carlos Antonio")."<br>"; // 1
echo preg_match("/Ca..os/", "Carlos Antonio")."<br>"; // 1
echo preg_match("/Ca..ox/", "Carlos Antonio")."<br>"; // 0
echo "<br>";


// ------------ ACEPTAR CIERTOS CARACTERES
echo preg_match("/C[abc]s/", "Carlos Antonio")."<br>"; // 0
echo preg_match("/Car[a-z]/", "Carlos Antonio")."<br>"; // 1
echo preg_match("/C[aeiou]r/", "Car Antonio")."<br>"; // 1
echo preg_match("/C[aeiou]r/", "Cur Antonio")."<br>"; // 1
echo "<br>";

echo preg_match("/[0-9]/", "Carlos Antonio")."<br>"; // 0
echo preg_match("/[0-9]/", "159456")."<br>"; // 1
echo preg_match("/[0-9]%/", "111%")."<br>"; // 1
echo preg_match("/C[aeiou]r/", "Car Antonio")."<br>"; // 1
echo preg_match("/C[aeiou]r/", "Cur Antonio")."<br>"; // 1
echo "<br>";

echo preg_match("/[0-9]%/", "111%")."<br>"; // 1
echo preg_match("/[a-z]/", "1235")."<br>"; // 0
echo preg_match("/[a-z]!/", "carlitos!")."<br>"; // 1
echo "<br>";

echo preg_match("/carlos | antonio/", "carlos ocejo programador")."<br>"; // 1
echo preg_match("/ingeniero | antonio/", "carlos ocejo programador")."<br>"; // 0
echo "<br>";

echo "Repetir Secuencias";



 ?>