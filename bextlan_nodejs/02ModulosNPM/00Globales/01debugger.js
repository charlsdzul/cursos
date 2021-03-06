"use strict";

const http = require("http");

const hostname = "127.0.0.1";
const port = 3000;

const webServer = (request, response) => {
  response.statusCode = 200;
  response.setHeader("Content-Type", "text/html");
  response.end("<h1>Hola mundo con NojdeJS!!!</h1>");
};

const server = http.createServer(webServer);

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});
