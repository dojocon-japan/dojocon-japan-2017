/* eslint-disable no-var, no-console */

'use strict';

global.$ = global.jQuery = require('jquery');
require('./lib/slick.js');
require('./lib/jquery.lettering.js');
require('./lib/circletype.js');
require('jquery.easing');
require('jquery.smoothscroll.js');

$(function() {

  /**
   * Menu
   */
  $('.js-sliding-panel-toggle').on('click touchstart', function(e) {
    $('.js-sliding-panel-toggle, .sliding-panel-content').toggleClass('is-active');
    e.preventDefault();
  });

  $('.sliding-panel-content a').on('click touchstart', function(e) {
    $('.js-sliding-panel-toggle, .sliding-panel-content').removeClass('is-active');
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
  $('.hero .site-title').circleType({
    radius: 180,
  });

  $('.page .page-title').circleType({
    radius: 160,
  });

  /**
   * Slick
   */
  $('.js-dojocon-japan-2016-archive-photos').slick({
    centerMode: true,
    centerPadding: '20px',
    mobileFirst: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          slidesToShow: 2,
          variableWidth: true,
        },
      },
    ],
  });

  /**
   * Smooth Scroll
   */
  $('a[href*="#"]').smoothscroll({
    easing: 'easeOutExpo',
  });
});
