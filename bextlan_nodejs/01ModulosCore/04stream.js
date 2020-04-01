/**
 * STREAM
 * 'Chorro de información que se transmite en 'pedazos'
 *  3 tipos: lectura, escritura, duplex
 *
 */

"use strict";

var fs = require("fs");
var readStream = fs.createReadStream("assets/nombres.txt");
var writeStream = fs.createWriteStream("assets/nombres_nuevos.txt");

readStream.pipe(writeStream);

//Contar caracteres leidos
readStream.on("data", function(chunk) {
  console.log("He leído: " + chunk.length + " caracteres");
});

readStream.on("end", function() {
  console.log("Lectura terminada");
});
