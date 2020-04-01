"use strict";

const http = require("http").createServer(webServer);
const fs = require("fs");
const index = fs.createReadStream("assets/index.html");

const hostname = "127.0.0.1";
const port = 3000;

function webServer(request, response) {
  response.writeHead(200, { "Content-Type": "text/html" });
  index.pipe(response);
}

http.listen(port, hostname);

console.log(`Server running at http://${hostname}:${port}/`);
