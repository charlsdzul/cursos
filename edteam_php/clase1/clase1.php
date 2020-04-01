<?php

 class Curso{

    public $nombre;
    public $duración;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    public function imprimirInfo(){

        return 'El nombre del curso es:' . $this->nombre . 
        ' y quien imparte el curso es '. $this->profesor;

    }


        public function validaDisponibilidad(){
            if($this->disponble== true){
                return "El curso está disponible";
            } else {
                return "El curso NO está disponible";
            }
        }
   


 }


 $curso_php = new Curso(); //Instacia de clase
 //Asignación de atributos
 $curso_php->nombre= 'POO en PHP';
 $curso_php->duración= '3 Sesiones';
 $curso_php->costo= 10;
 $curso_php->moneda= 'USD';
 $curso_php->profesor= 'Yesi Days';
 $curso_php->disponible= true;
 echo $curso_php->imprimirInfo(); //Llamada a función
    var_dump($curso_php);


$js = new Curso();
$js->nombre= 'JS desde cero';
$js->duración= '6 Sesiones';
$js->costo= 0;
$js->moneda= 'USD';
$js->profesor= 'Álvaro Felipe';
$js->disponible= true;
echo $js->imprimirInfo(); //Llamada a función
    var_dump($js);




?>