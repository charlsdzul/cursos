<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO Avanzado</title> 
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="/a.jsx"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<script type="text/babel"> 
import { Formulario } from "a";

    
          class Hello extends React.Component {
          
              constructor(props){
                  super(props)

                  this.state = {
                    cursos: [],
                    ar:''
                    }


                    this.peticion = this.peticion.bind(this);
                    this.up = this.up.bind(this);
                }


           
                //Esta peticion puede ser con Didmount!!!!!
                //Y no haría falta el evento ni ejecutarlo ni hacer bind
              peticion(){

                  fetch('https://my-json-server.typicode.com/charlsdzul/json-gb/cursos/2')
                  .then((response) => {
                  return response.json()
                })
                .then((data) => {
                  this.setState({ cursos: data })
                })

              }
              up(e){
                alert(e.target.files[0])
                this.setState({
                  ar:e.target.files[0].name
                })
              }    
              render() {
                  return (
                  <div>     
                  <div className="btn-group">
                  <div className="btn-group">
                    <button type="button" className="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      Sony
                    </button>
                    <div className="dropdown-menu">
                      <a className="dropdown-item" href="#">Tablet</a>
                      <a className="dropdown-item" href="#" onClick={this.peticion}>Datos</a>
                    </div>
                  </div>
                </div>

                <Formulario />
                  

                  <h1>Hello World! con React ...{this.state.cursos.titulo}</h1>
                  



                    <h2>Actualizado: {this.state.cursos.titulo}</h2>
                    <input type='file' name="file" onChange={this.up}></input>
                    <h2>Archivo: {this.state.ar}</h2>                
                  
                    </div>
                  )              
              }

            
          }

      // export default Hello




   
<?php
if(1==1){
    echo ("ReactDOM.render(<Hello />, document.getElementById('mydiv'))");
  }
?>

</script>




<!--
    <script type="text/babel">

          class Hello extends React.Component {
              constructor(props){
                  super(props)
                  this.state = {
                      cursoActual: {
        "id":1,
        "titulo":"React.js desde cero",
        "imagen":"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuoASEr4DroRUkBopD4dDLj3jz7a82fdoRfzFFV-8eds8-OwUY",
        "price":80,
        "profesor":"Carlos Dzul"
    }
                    }
                }

              render() {
                  return (<h1>Hello World! con React {this.state.cursoActual.titulo}</h1>)              
              }
                      }

         //export default Hello
         <?php
if(1==1){
    echo ("ReactDOM.render(<Hello />, document.getElementById('mydiv'))");
  }
?>

</script>

-->







<div id="mydiv"></div>

<h1>POO Avanzado</h1>


<?php

require_once __DIR__.'/include/Global.inc.php';
define('INC', '/include/');
require_once __DIR__ . INC . 'curso.inc.php';


$estudiante = new Estudiante('Carlos','Dzul','c.dzul@hotmail.com');
var_dump($estudiante);
echo $estudiante->bienvenida();

$profesor = new Profesor('Erika','Aguilera','erika@hotmail.com');
var_dump($profesor);
echo $profesor->bienvenida();


echo "<br>-----------------------------<br>";

$curso1 = new Curso('PHP Desde Cero', 'Jessy Days', '3 sesiones', 10, 'true');
$curso2 = new Curso('Javascript Desde Cero', 'Álvaro Felipe', '6 sesiones', 0, 'true');

echo $curso1->obtenerTitulo()."<BR>";
echo $curso1->obtenerProfesor()."<BR>";
$curso1->asignarTitulo('POO en PHP I');
echo $curso1->obtenerTitulo()."<BR>";

$curso1->asignarRequerimientos(['PHP basico', 'ganas de aprender', 'práctica']);
$curso1->obtenerRequerimientos();
echo $curso1->obtenerMoneda();

$curso1->acumular();
$curso1->acumular();
$curso1->acumular();
$curso1->acumular();



echo "<br>-----------------------------<br>"






?>
    
</body>
</html>