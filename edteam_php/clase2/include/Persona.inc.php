<?php

class Persona {

public $nombre;
public $apellido;
public $email;


public function __construct($nombre,$apellido,$email){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email=$email;
}



public function bienvenida(){
    return "Bienvenido ".$this->nombre." a EDteam";
}

//'final' indica que el metodo no puede ser sobreescrito
final public function despedida(){
    return "Hasta luego ".$this->nombre;
}


}

?>