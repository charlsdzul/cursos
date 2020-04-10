<?php
 class Fruta{ //final class Fruta indicaria que la esta clase no puede heredar!

    public $nombre;
    public $color;
    public $peso;
    
    function __construct($nombre, $color,$peso){
        //Se ejecuta al instanciar la clase
        $this->nombre=$nombre;
        $this->color=$color;
        $this->peso=$peso;
    }

    function __destruct(){
        //Se ejecutara siempre al final del script
        echo "<br> El " . $this->nombre . "es de color " . $this->color;
        $this->mensaje();
    }

     protected function mensaje(){ //  final protected function mensaje(), indica que la funcion NO PUEDE SER overriding!
        echo "¡Es deliciosoo!";
    }

    function obtener_peso(){ 
        echo "<br> El mango tiene un peso de $this->peso gramos";
    }

    static function ejemplo_static(){//Esta funcion se puede llamar sin tener que instanciar. Fruta::ejemplo_static();

        echo "<br>Contenido de funcion static dentro de otra funcion static";
    }

    static function ejemplo_static_2(){
        self::ejemplo_static();
    }

    static function hola(){
        echo "HOLA!";
    }

}



class Verdura extends Fruta{
    public $beneficios;
    const AVISO = "No Debes Excederte En La Comida"; //Constante

    protected function mensaje(){ // Overriding de la function mensaje() en clase padre
        echo "¡Es deliciosisisisisisismo! ". self::AVISO;
    }

        function beneficios(){
            echo strtoupper("<br>Comer verduras también es bueno.<br>");
            echo "EL ".$this->nombre."... ";
            $this->mensaje();echo "... TE LO ASEGURO";

        }

}

$mango = new Fruta("Mango", "Amarillo",1121);
$mango->obtener_peso();
Fruta::ejemplo_static_2();

$verdura = new Verdura("TOMATE", "VERDE", 506);
$verdura->beneficios();
echo "<br>Aviso 2: ".$verdura::AVISO;
//$verdura->mensaje();
Fruta::hola();



?>