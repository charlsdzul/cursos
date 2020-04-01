/**}
 * Patrón Observador
 * ON y ONCE se asignan funciones a eventos
 * EMIT ejecuta el evento
 */

"use strict";

var EventEmitter = require("events").EventEmitter;
var pub = new EventEmitter();

//'on' es como un addeventlistener
pub.on("myevent", function(message) {
  console.log(message);
});

//'once' es como un addeventlistener, pero solo para una vez
pub.once("myevent", function(message) {
  console.log(message);
});

//'emit' emite el evento
pub.emit("myevent", "Soy un emisor de eventos");
pub.emit("myevent", "Volviendo a emitir");

//'removeAllListeners' eliminar evento
pub.removeAllListeners("myevent");
