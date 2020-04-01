/**
 * Uso de URL
 */

"use strict";

var http = require("http").createServer(webServer),
  path = require("path"),
  url = require("url"),
  urls = [
    { id: 1, route: "", output: "<h2>Home</h2>" },
    { id: 2, route: "acerca", output: "<h2>Acerca</h2>" },
    { id: 3, route: "contacto", output: "<h2>Contacto</h2>" }
  ];

function webServer(req, res) {
  var mensaje = "<h1>Hola NodeJs</h1>",
    id = url.parse(req.url, true).query.id,
    pathURL = path.basename(req.url); //basename considera la ultima parte de un path

  console.log(`path: ${pathURL}, id: ${id}`);
  console.log(`path: ${pathURL}, id: ${id}`);

  urls.forEach(function(pos) {
    if (pos.route == pathURL || pos.id == id) {
      res.writeHead(200, { "Content-Type": "text/html" });
      res.end(mensaje + pos.output);
    }
  });

  if (!res.finished) {
    res.writeHead(404, { "Content-Type": "text/html" });
    res.end("<h3>Error 404: Not Found</h3>");
  }
}

http.listen(3000);
console.log(`Server running at http://127.0.0.1:3000/`);
