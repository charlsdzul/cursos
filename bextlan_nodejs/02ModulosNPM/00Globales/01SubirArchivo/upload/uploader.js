"use strict";

var http = require("http").createServer(serverUpload),
  util = require("util"),
  formidable = require("formidable"),
  fse = require("fs-extra");

function serverUpload(req, res) {
  if (req.method == "GET") {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.end(`<H3>Uploader</H3>
            <form action='/upload' enctype='multipart/form-data' method='post'>
            <div><input type='file' name='upload' required></div>
            <div><input type='submit' value='Subir archivo'></div>
            </form>            
            `);
  }

  if (req.method == "POST" && req.url == "/upload") {
    var form = new formidable.IncomingForm();
    form
      .parse(req, function(err, fields, files) {
        res.writeHead(200, { "Content-Type": "text/html" });
        res.write(
          "<h1>Archivos recibidos</h1>" + util.inspect({ files: files })
        );
        res.end();
      })
      .on("progress", function(bytesReceived, bytesExpected) {
        let percentCompleted = (bytesReceived / bytesExpected) * 100;
        console.log(percentCompleted);
      })
      .on("error", function(err) {
        console.log(err);
      })
      .on("end", function(fields, files) {
        let tempPath = this.openedFiles[0].path,
          fileName = this.openedFiles[0].name,
          newLocation = "./upload/" + fileName;

        fse.copy(tempPath, newLocation, function(err) {
          return err
            ? console.log(err)
            : console.log("El archivo subio con éxito");
        });
      });

    return;
  }
}

http.listen(3000);

console.log("Servidor corriendo en http://localhost:3000/");
