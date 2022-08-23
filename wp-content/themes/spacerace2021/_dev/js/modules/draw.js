'use strict';

const $ = require('jquery');
const draw = require('../library/DrawSVGPlugin');

class Draw {

  constructor( options ) {
    //setup any defaults
    this.defaults = {};
    //merge options with defaults
    this.settings = $.extend( true, {}, this.defaults, options );
    this.setup();
  }

  setup() {

    if( $('.js-draw').length ) {
      this.events();
    } else {
      return;
    }

  }

  events() {

    var slash = $('.linework'),
      path = $('.linework path'),
      done = false;

    gsap.fromTo(path, 0, {drawSVG:0}, {drawSVG:false});


    function detect(){
      if( slash.hasClass('in-view')) {
        if(done) return;
        setTimeout(function(){
          gsap.fromTo(path, {drawSVG: "0 0"}, {duration: 5, drawSVG: "0% 100%"});
        }, 400);
        done = true;
      }
    }

    $(document).ready(function(){
      detect();
    });

    window.addEventListener('scroll', detect);
    window.addEventListener('resize', detect);
  }

}

module.exports = Draw;
