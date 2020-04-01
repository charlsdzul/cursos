"use strict";
class Clock {
  constructor() {
    setInterval(() => {
      this.theTime();
    }, 1000);
  }

  theTime() {
    var date = new Date();
    var hrs = date.getHours();
    var min = date.getMinutes();
    var seg = date.getSeconds();
    var msg = `La hora actual es: ${hrs}:${min}:${seg}`;
    console.log(msg);
  }
}

module.exports = Clock;
