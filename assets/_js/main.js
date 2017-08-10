'use strict';

window.$ = window.jQuery = require('jquery');

$(function() {

  $('.js-sliding-panel-toggle, .sliding-panel-fade-screen').on('click touchstart', function(e) {
    $('.js-sliding-panel-toggle, .sliding-panel-fade-screen, .sliding-panel-content').toggleClass('is-active');
    e.preventDefault();
  });

});
