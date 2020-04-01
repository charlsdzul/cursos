/**
 * Uso de URL
 */

"use strict";

var http = require("http").createServer(webServer),
  fs = require("fs"), //SIEMPRE QUE SE REQUIERA UN ARCHIVO, NEVESITA FILESYSTEM
  path = require("path"),
  url = require("url"),
  urls = [
    { id: 1, route: "", output: "assets/index.html" },
    { id: 2, route: "acerca", output: "assets/acerca.html" },
    { id: 3, route: "contacto", output: "assets/contacto.html" }
  ];

function webServer(req, res) {
  var id = url.parse(req.url, true).query.id,
    pathURL = path.basename(req.url); //basename considera la ultima parte de un path

  console.log(`path: ${pathURL}, id: ${id}`);
  console.log(`path: ${pathURL}, id: ${id}`);

  urls.forEach(function(pos) {
    if (pos.route == pathURL || pos.id == id) {
      res.writeHead(200, { "Content-Type": "text/html" });
      fs.readFile(pos.output, function(err, data) {
        if (err) throw err;
        res.end(data);
      });
    }
  });

  if (!res.finished) {
    res.writeHead(404, { "Content-Type": "text/html" });
    fs.readFile("assets/404.html", function(err, data) {
      if (err) throw err;
      res.end(data);
    });
  }
}

http.listen(3000);
console.log(`Server running at http://127.0.0.1:3000/`);
