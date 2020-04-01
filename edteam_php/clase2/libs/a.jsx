class Formulario extends React.Component {
  //Si el componente no requiriera props, no es necesario el constructor
  constructor(props) {
    super(props);

    //El estado state es exclusivo del componente!
    //
    this.state = {
      Excuela: "UnADM", //Propiedad NO DINAMICA
      edad: "", //Propiedad DINÁMICA!
      nombre: "", //PROPIEDAD DINÁMICA!
      correo: "", //PROPIEDAD DINÁMICA!
      fecha: new Date()
    };

    //Bind
    this.cambiarCorreo = this.cambiarCorreo.bind(this);
    this.cambiarEdad = this.cambiarEdad.bind(this);
    this.cambiarFecha = this.cambiarFecha.bind(this);
  }

  cambiarFecha() {
    this.setState({
      fecha: new Date()
    });
  }

  cambiarCorreo(e) {
    this.setState({
      correo: e.target.value
    });
  }

  cambiarEdad(e) {
    let edad1 = e.target.value;
    edad1 = edad1 * 2;
    this.setState({
      edad: edad1 //mismo nombre, diferente propiedad!
    });
  }

  //this.setState({objeto}) Actualiza el estado del componente!
  //No se puede manipular directo el estado, hay que usar setState({})!

  render() {
    //render() retorna el componente y es obligatorio
    return (
      <div className="ed-grid">
        <h1 id="titulo">Formulario {this.props.nombre_formulario}</h1>
        <h2 className="fecha">{`Hoy es ${this.state.fecha}`}</h2>
        <form>
          <div className="form-item">
            <label>Nombre Completo</label>
            <input
              type="text"
              onChange={e =>
                this.setState({
                  nombre: e.target.value
                })
              }
            />
          </div>
          <div className="form-item">
            <label>Correo Electrónico</label>
            <input type="email" onChange={this.cambiarCorreo} />
          </div>
          <div className="form-item">
            <label>Edad</label>
            <input type="text" onChange={this.cambiarEdad} />
          </div>
          <div className="form__item">
            <input type="submit" className="button full" value="Enviar" />
          </div>
        </form>

        <div>
          <h2>
            {`Hola ${this.state.nombre}, tienes ${this.state.edad} años y `}
            <span>{`tu correo es: ${this.state.correo}`}</span>
          </h2>
          <h3>{`Tu edad por 2 es: ${this.state.edad}`}</h3>
          {this.state.edad ? <CourseGrid /> : <h2>nO HAy edad..</h2>}
        </div>
      </div>
    );
  }

  //Para manipular lo renderizado, se puede usar componentDidMount()!
  componentDidMount() {
    let titulo = document.getElementById("titulo");
    titulo.style.color = "red";

    //Mostrar hora cada segundo
    this.intervaloFecha = setInterval(() => {
      //this.cambiarFecha();
    }, 1000);
  }

  //Conocer el estado y props anteriores!
  componentDidUpdate(prevProps, prevState) {
    console.log(prevProps);
    console.log(prevState);
  }

  //Cuando el componente ha sido desmontado, sucederá esto
  //Llamados para limpiar y detener procesos
  componentWillUnount() {
    clearInterval(this.intervaloFecha, true);
  }
}

export default Formulario;
