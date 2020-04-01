"use strict";

const http = require("http").createServer(webServer);
const fs = require("fs");

const hostname = "127.0.0.1";
const port = 3000;

function webServer(request, response) {
  function readFile(error, datos) {
    if (error) throw error;
    response.end(datos);
  }
  response.writeHead(200, { "Content-Type": "text/html" });
  fs.readFile("assets/index.html", readFile);
}

http.listen(port, hostname);

console.log(`Server running at http://${hostname}:${port}/`);
