<?php

class Profesor extends Persona {

    public function __construct($nombre,$apellido,$email){

        
        //Hacer referencia al constructor del padre
        //Se puede omitir y solo tener el propio constructor
        parent::construct($nombre,$apellido,$email);
    
    }
    
}


?>