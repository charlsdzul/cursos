"use strict";

var http = require("http").createServer(webServer);
var form = require("fs").readFileSync("assets/formulario.html");
var querystring = require("querystring");
var util = require("util");
var dataString = "";

function webServer(req, res) {
  if (req.method == "GET") {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.end(form);
  }

  if (req.method == "POST") {
    req
      .on("data", function(data) {
        dataString += data;
      })
      .on("end", function() {
        var dataObject = querystring.parse(dataString); //Mostrar como objeto
        var dataJson = util.inspect(dataObject);
        var templateString = `
        Los datos que enviaste por POST como string: ${dataString}
        Los datos que enviaste por POST como objeto: ${JSON.stringify(
          dataObject
        )}
        Los datos que enviaste por POST como json: ${dataJson}
        `;
        console.log(templateString);
        res.end(templateString);
      });
  }
}

http.listen(3001);
console.log("Servidor corriendo en puerto 3000 en http://localhost:3001");
