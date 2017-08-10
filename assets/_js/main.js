'use strict';

window.$ = window.jQuery = require('jquery');

$(function() {

  $('.js-sliding-panel-toggle').on('click touchstart', function(e) {
    $('.js-sliding-panel-toggle, .sliding-panel-content').toggleClass('is-active');
    e.preventDefault();
  });

});
