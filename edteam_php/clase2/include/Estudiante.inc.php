<?php



class Estudiante extends Persona {


    public function __construct($nombre,$apellido,$email){
        
        //Hacer referencia al constructor del padre
        parent::construct($nombre,$apellido,$email);

    }

    public function bienvenida(){
        return "Bienvenido {$this->nombre}, tenemos nuevos 
        cursos para ti";
    }
}

?>