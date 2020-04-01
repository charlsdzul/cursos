/**
 * BUFFER:
 * Es una tira de bytes (datos binarios)
 * Similar a un array de enteros
 * Tamaño fijo
 * Es para manipular datos directamente
 *      Sockets, Streams, Protocolos complejos, manipulacion de ficheros e imagenes, Criptografía
 * No requiere importarse
 */

"use strict";

var buf = new Buffer.alloc(100); //Similar a un arreglo
var buf2 = new Buffer(26);
var str = "\u00bd + \u00bc = \u00be";
console.log(str);
console.log(buf);
console.log(buf2);
console.log(str.length + " Caracteres");
console.log(Buffer.byteLength(str) + " Bytes");
