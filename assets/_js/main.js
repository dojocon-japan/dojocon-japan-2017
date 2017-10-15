/* eslint-disable no-var, no-console, no-invalid-this */

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
  $('.js-sliding-panel-toggle').on('click', function(e) {
    e.preventDefault();
    $('.js-sliding-panel-toggle, .sliding-panel-content').toggleClass('is-active');
  });

  $('.sliding-panel-content a[href*="#"]').on('click', function(e) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      $('.js-sliding-panel-toggle, .sliding-panel-content').removeClass('is-active');
    }
  });

  $('.js-entry-nav-box-toggle').on('click', function(e) {
    e.preventDefault();
    $('.entry-nav-box, .js-entry-nav-fade-screen').addClass('is-active');
  });

  $('.js-entry-nav-box-close, .js-entry-nav-fade-screen').on('click', function(e) {
    e.preventDefault();
    $('.entry-nav-box, .js-entry-nav-fade-screen').removeClass('is-active');
  });

  /**
   * Warp page titles
   */
  function warpTitles() {
    if ($(window).width() >= 640) {
      $('.hero .site-title').circleType({
        radius: 400,
      });
      $('.page .page-title').circleType({
        radius: 240,
      });
      $('.js-site-title').circleType({
        radius: 120,
      });
      $('.js-coderdojo-foundation-title').circleType({
        radius: 200,
      });
    } else {
      $('.hero .site-title').circleType({
        radius: 180,
      });
      $('.page .page-title').circleType({
        radius: 160,
      });
      $('.js-site-title').circleType({
        radius: 90,
      });
      $('.js-coderdojo-foundation-title').circleType({
        radius: 200,
      });
    }
  }

  warpTitles();
  var timer = false;
  $(window).on('resize', function() {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function() {
      warpTitles();
    }, 200);
  });

  /**
   * Slick
   */
  $('.js-dojocon-japan-2016-archive-photos').slick({
    autoplay: true,
    centerMode: true,
    centerPadding: '20px',
    mobileFirst: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 979,
        settings: {
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
    ],
  });

  /**
   * Timetable
   */
  $('.js-timetable').wrap('<div class="table-outermost"><div class="table-scroll-box"></div></div>');
  $('.js-timetable').on('scroll', function() {
    var scrollTop = $(this).scrollTop();
    console.log(scrollTop);
    $(this).find('.time-column').css({
      marginTop: - scrollTop,
    });
  });

  /**
   * Smooth Scroll
   */
  $('a[href*="#"]').smoothscroll({
    easing: 'easeOutExpo',
  });

  /**
   * Loading
   */
  $(window).on('load', function() {
    $('.js-loading').fadeOut(1000);

  });

  setTimeout(function() {
    $('.js-loading').fadeOut(1000);
  }, 15000);
});
