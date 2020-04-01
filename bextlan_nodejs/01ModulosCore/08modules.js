"use strict";

var mydata = require("./my-data");
//var Clock = require("./clock-es5");
var Clock = require("./clock-es6");
var cucu = new Clock();
console.log(mydata.nameExportado, mydata.emailExportado);

cucu.on("tictac", function() {
  cucu.theTime();
});
