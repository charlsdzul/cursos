<?php

interface Requerimiento {
    public function asignarRequerimientos($listado);
    public function obtenerRequerimientos();
}

interface Conocimiento {
    public function asignarConocimiento($listado);
    public function obtenerConocimiento();
}


class Curso implements Requerimiento, Conocimiento{

    private $nombre;
    private $duración;
    private $costo;
    private $moneda;
    private $profesor;
    private $disponible;
    public static $monedaD = 'USD';
    public static $acumulado = 0;

    public function __construct($titulo, $profesor, $duracion, $costo, $disponible){
        $this->titulo=$titulo;
        $this->profesor=$profesor;
        $this->duracion=$duracion;
        $this->costo=$costo;
        $this->disponible=$disponible;
    }

    public function __destruct(){

        echo 'Destruyendo '.$this->titulo."</br>";

    }



    #ENCAPSULACION getter - setter

    public function obtenerTitulo(){
        return $this->titulo;
    }

    public function obtenerProfesor(){
        return $this->profesor;
    }

    public function asignarTitulo($titulo){
        $this->titulo = $titulo;
    }



    #Implementar funciones de interface

    public function asignarRequerimientos($listado){
        $this->listado = $listado;

    }

    public function obtenerRequerimientos(){
        if(!empty($this->listado)){
            foreach($this->listado as $req){
                echo "<p>".$req."</p>";

            }
        }

    }


    public function asignarConocimiento($listado){
        $this->listado = $listado;

    }

    public function obtenerConocimiento(){
        if(!empty($this->listado)){
            foreach($this->listado as $req){
                echo "<p>".$req."</p>";

            }
        }

    }

    static function obtenerMoneda(){
        return "La moneda es: ".self::$monedaD;
    }

    static function acumular(){
        echo "Acumulado: ".self::$acumulado."<br>";
        self::$acumulado = self::$acumulado+1;
        echo "Si le sumas 1 es: ".self::$acumulado."<br>";


    }



 }

 


?>