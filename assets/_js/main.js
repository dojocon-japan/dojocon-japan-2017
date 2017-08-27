/* eslint-disable no-var, no-console */

'use strict';

global.$ = global.jQuery = require('jquery');
require('./jquery.lettering.js');
require('./circletype.js');

$(function() {

  /**
   * Menu
   */
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

  /**
   * Warp page titles
   */
  $('.page .page-title').circleType({
    radius: 160,
  });
});
