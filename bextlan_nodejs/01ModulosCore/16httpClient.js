"use strict";

var http = require("http"),
  options = {
    host: "dzul1111.com",
    port: 80,
    path: "/"
  };

http
  .get(options, function(res) {
    console.log(
      `El sitio ${options.host} ha respondido. Código de estado: ${res.statusCode}`
    );
  })
  .on("error", function(err) {
    `El sitio ${options.host} no responde. Error: ${err.code}`;
  });
