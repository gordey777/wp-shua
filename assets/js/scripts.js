// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}


jQuery(document).ready(function() {


  /*ACTIVE MENU*/
  // jQuery("#main-nav a").hover(function() {

  //   var linePosition = jQuery(this).offset(),
  //     wrappPosition = jQuery('.wrapper').offset(),

  //     mnuW = jQuery(this).parent('li').width();

  //   jQuery("#bottom_line").css({
  //     left: linePosition.left - wrappPosition.left,
  //     width: mnuW,
  //   });
  // });

  var mnuH = jQuery("#main-nav").height();


  jQuery('#main-nav a:first').addClass('active');

  $('header').css('padding-bottom', mnuH);


  jQuery('#main-nav a').on('click', function() {
    //var mnuH = jQuery(".nav__header").height();
    var scrollAnchor = jQuery(this).attr('href'),
      scrollPoint = jQuery(scrollAnchor).offset().top - 37;
    jQuery(this).addClass('active');
    jQuery('body,html').animate({
      scrollTop: scrollPoint
    }, 500);

    return false;

  })


  /*SCROLL TO*/
  jQuery('.scroll__to').on('click', function() {

    var scrollAnc = jQuery(this).attr('href'),
      scrollPos = jQuery(scrollAnc).offset().top - 30;

    jQuery('body,html').animate({
      scrollTop: scrollPos
    }, 500);

    return false;

  })



  /*MOB MENU*/
  if (jQuery(window).width() < 768) {

    $('.nav__header .mob_wrapp').prepend('<ul id="mob_top"></ul>');

    $("#main-nav li").clone().appendTo("#mob_top");
    //$("#mob_top li a").addClass('scroll__to');


    $('#humburger').click(function() {
      var cont = jQuery(this).data('tab');


      jQuery(".mob_wrapp").toggleClass('open');

    });

    $('#overlay_mob').click(function() {
      var cont = jQuery(this).data('tab');
      jQuery(".mob_wrapp").removeClass('open');
    });


    jQuery('#mob_top li a').on('click', function() {

      var scrollAnc = jQuery(this).attr('href'),
        scrollPos = jQuery(scrollAnc).offset().top - 37;

      jQuery(this).parent('li').siblings('li').children('a').removeClass('active');
      jQuery(this).addClass('active');

      jQuery('body,html').animate({
        scrollTop: scrollPos
      }, 500);

      return false;

    })
  }



  /*TABS*/
  jQuery("#product_tabs").find('.tab-content.hidden_tab').hide();
  (function($) {

    var tabs = jQuery("#product_tabs .tabs-nav .tab-btn");

    tabs.click(function() {
      var content = jQuery(this).data('tab');

      tabs.removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#product_tabs").find('.tab-content').hide();
      jQuery("#product_tabs").find('.tab-content.active').removeClass("activ");
      jQuery(content).fadeIn(300).removeClass("hidden_tab").addClass("active");
    });

  })(jQuery);



});




jQuery(window).scroll(function() {

  var headerH = (jQuery('header .top-line').outerHeight()) + 30,
    headerW = jQuery('header').width(),
    mnuH = jQuery("#main-nav").height(),
    windscroll = jQuery(window).scrollTop(),
    wrappPosition = jQuery('.wrapper').offset();




  function activeMenu() {
    setTimeout(function() {
      var linePos = jQuery("#main-nav a.active").offset(),
        mnuW = jQuery("#main-nav a.active").parent('li').width(),
        linePosA = linePos.left - wrappPosition.left;


      jQuery("#bottom_line").css({
        left: linePosA,
        width: mnuW,
      });
    }, 100);

  }

  function scrollActive() {
    jQuery('section').each(function(i) {
      if (jQuery(this).position().top <= windscroll + 50 || jQuery(this).position().bottom <= windscroll - 20) {
        jQuery('#main-nav a.active').removeClass('active');

        jQuery('#main-nav a[ href = "#' + jQuery(this).attr("id") + '"]').addClass('active');
        activeMenu();
      }

      //activeMenu();
    });
  }





  if (jQuery(window).width() >= 768) {

    activeMenu();

    if (windscroll >= 10) {
      scrollActive();
      //var mnuH = jQuery(".nav__header").height();
      jQuery('header').addClass('fixed');
      jQuery('.nav__header').css({
        left: wrappPosition.left,
        width: headerW,
      });
      jQuery('header .logo').css({
        left: wrappPosition.left,
        height: mnuH,
      });

    } else {

      jQuery('header').removeClass('fixed');
      jQuery('.nav__header').css({
        left: 0,
        width: '100%',
      });
      jQuery('header .logo').css({
        left: 0,
        height: 'auto',
      });
      scrollActive();


    }

    // jQuery("#main-nav a").hover(function() {

    //   var linePosition = jQuery(this).offset(),
    //     wrappPosition = jQuery('.wrapper').offset(),
    //     mnuW = jQuery(this).parent('li').width();

    //   jQuery("#bottom_line").css({
    //     left: linePosition.left - wrappPosition.left,
    //     width: mnuW,
    //   });
    // });
  }

}).scroll();
