"use strict";
/**
 * Con funcion autoejecutable
 */
var Clock = (function() {
  var EventEmitter = require("events").EventEmitter;
  var inherits = require("util").inherits;

  var Clock = function() {
    //var self = this;
    setInterval(() => {
      this.emit("tictac");
    }, 1000);
  };

  inherits(Clock, EventEmitter);

  Clock.prototype.theTime = function() {
    var date = new Date();
    var hrs = date.getHours();
    var min = date.getMinutes();
    var seg = date.getSeconds();
    // var msg = hrs + ":" + min + ":" + seg;
    var msg = `La hora actual es: ${hrs}:${min}:${seg}`;

    console.log(msg);
  };

  return Clock;
})();

module.exports = Clock;
