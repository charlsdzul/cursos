"use  strict";
/* FUNCIONANDO
var EventEmitter = require("events").EventEmitter;
var inherits = require("util").inherits;

var Clock = function() {
  var self = this;
  setInterval(function() {
    self.emit("tictac");
  }, 1000);
};

inherits(Clock, EventEmitter);

Clock.prototype.theTime = function() {
  var date = new Date();
  var hrs = date.getHours;
  var min = date.getMinutes;
  var seg = date.getSeconds;
  var msg = hrs + ":" + min + ":" + seg;

  console.log(msg);
};

var cucu = new Clock();
cucu.on("tictac", function() {
  cucu.theTime();
});
*/
