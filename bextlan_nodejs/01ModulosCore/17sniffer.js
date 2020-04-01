"use strict";

var http = require("http"),
  options = {
    host: "doinmobiliaria.com",
    port: 80,
    path: "/"
  },
  htmlCode = "";

function httpCliente(res) {
  console.log(
    `El sitio ${options.host} ha respondido. Código de estado: ${res.statusCode}`
  );
  res.on("data", function(data) {
    htmlCode += data;
    console.log(data, data.toString());
  });
}

function httpError(err) {
  console.log(`El sitio ${options.host} no responde. Error: ${err.code}`);
}

function webServer(req, res) {
  res.writeHead(200, { "Content-Type": "text/html" });
  res.end(htmlCode);
}

http //instancia cliente hhtp
  .get(options, httpCliente)
  .on("error", httpError);
http //instancia servidor
  .createServer(webServer)
  .listen(3000);

console.log(`Server running at http://127.0.0.1:3000/`);
