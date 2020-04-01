"use strict";

const http = require("http").createServer();
const hostname = "127.0.0.1";
const port = 3000;
const webServer = (request, response) => {
  response.writeHead(200, { "Content-Type": "text/plain" });
  response.end("<h1>Hola mundo con NojdeJS!</h1>");
};

http.on("request", webServer).listen(3000, "127.0.0.1");

console.log(`Server running at http://${hostname}:${port}/`);
