/* eslint-disable no-var, no-unused-vars, no-console */

'use strict';

global.$ = global.jQuery = require('jquery');
var lettring = require('./jquery.lettering.js');
var circleType = require('./circletype.js');

$(function() {

  $('.js-sliding-panel-toggle').on('click touchstart', function(e) {
    $('.js-sliding-panel-toggle, .sliding-panel-content').toggleClass('is-active');
    e.preventDefault();
  });

  $('.js-entry-nav-box-toggle').on('click touchstart', function(e) {
    $('.entry-nav-box, .js-entry-nav-fade-screen').addClass('is-active');
    e.preventDefault();
  });

  $('.js-entry-nav-box-close, .js-entry-nav-fade-screen').on('click touchstart', function(e) {
    $('.entry-nav-box, .js-entry-nav-fade-screen').removeClass('is-active');
    e.preventDefault();
  });

  $('.page .page-title').circleType({
    radius: 250,
  });

});
