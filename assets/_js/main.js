'use strict';

window.$ = window.jQuery = require('jquery');

$(function() {

  $('.js-hamburger').on('click touchstart', function(e) {
    $('.js-hamburger').toggleClass('is-active');
    e.preventDefault();
  });

});
