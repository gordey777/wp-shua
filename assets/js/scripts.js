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



// //alert($headH );
// jQuery("#section-1").css("margin-top", $headH + "px");







jQuery(document).ready(function() {

  /*SCROL*/
  // (function($) {
  //   jQuery(window).load(function() {

  //     jQuery("#main-nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
  //       highlightSelector: "#nav-menu a"
  //     });

  //     jQuery("a[rel='next']").click(function(e) {
  //       e.preventDefault();
  //       var to = jQuery(this).parent().parent("section").next().attr("id");
  //       $.mPageScroll2id("scrollTo", to);
  //     });

  //   });
  // })(jQuery);

  // (function($) {
  //   jQuery(window).load(function() {

  //     jQuery("#main-nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({

  //       scrollSpeed: 1300,
  //       autoScrollSpeed: true,
  //       pageEndSmoothScroll: true,
  //       offset: mnuH,
  //       forceSingleHighlight: false,
  //       highlightByNextTarget: false,
  //       /* disable plugin below [x,y] screen size: boolean, integer, array ([x,y]) */
  //       disablePluginBelow: false,
  //     });
  //   });
  // })(jQuery);







  /*ACTIVE MENU*/
  jQuery("#main-nav a").hover(function() {

    var linePosition = jQuery(this).offset(),
      wrappPosition = jQuery('.wrapper').offset(),

      mnuW = jQuery(this).parent('li').width();

    jQuery("#bottom_line").css({
      left: linePosition.left - wrappPosition.left,
      //left : 'auto',
      //right: linePosition.leftright,
      width: mnuW,
    });
  });

  var mnuH = jQuery("#main-nav").height();
  jQuery(window).scroll(function() {
    mnuH = jQuery("#main-nav").height();
  }).scroll();

  jQuery('#main-nav a:first').addClass('active');

  $('header').css('padding-bottom', mnuH);

  function activeMenu() {
    setTimeout(function(e) {
      var linePos = jQuery("#main-nav a.active").offset(),
        wrappPos = jQuery('.wrapper').offset(),
        mnuW = jQuery("#main-nav a.active").parent('li').width();


      jQuery("#bottom_line").css({
        left: linePos.left - wrappPos.left,
        width: mnuW,
      });
    }, 5);
    return;
  }



  jQuery('#main-nav a').on('click', function() {
    //var mnuH = jQuery(".nav__header").height();
    var scrollAnchor = jQuery(this).attr('href'),
      scrollPoint = jQuery(scrollAnchor).offset().top - 37;

    jQuery('body,html').animate({
      scrollTop: scrollPoint
    }, 500);

    return false;

  })
  jQuery('.scroll__to').on('click', function() {

    var scrollAnc = jQuery(this).attr('href'),
      scrollPos = jQuery(scrollAnc).offset().top - 37;

    jQuery('body,html').animate({
      scrollTop: scrollPos
    }, 500);

    return false;

  })



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
      jQuery(content).fadeIn(300).removeClass("hidden_tab").addClass("active");;
    });

  })(jQuery);

  activeMenu();
});




jQuery(window).scroll(function() {

  function activeMenu() {
    setTimeout(function(e) {
      var linePos = jQuery("#main-nav a.active").offset(),
        wrappPos = jQuery('.wrapper').offset(),
        mnuW = jQuery("#main-nav a.active").parent('li').width();


      jQuery("#bottom_line").css({
        left: linePos.left - wrappPos.left,
        width: mnuW,
      });
    }, 100);
    return;
  }


  var headerH = (jQuery('header .top-line').outerHeight()) + 30,
    headerW = jQuery('header').width();

  //if (jQuery(window).width() > 768) {

  var mnuH = jQuery("#main-nav").height();
  windscroll = jQuery(window).scrollTop(),

    wrappPosition = jQuery('.wrapper').offset();


  function scrollActive() {
    jQuery('section').each(function(i) {
      if (jQuery(this).position().top <= windscroll + 50 || jQuery(this).position().bottom <= windscroll - 20) {
        jQuery('#main-nav a.active').removeClass('active');

        jQuery('#main-nav a[ href = "#' + jQuery(this).attr("id") + '"]').addClass('active');
        activeMenu();
      }

      activeMenu();
    });
  }

  if (windscroll >= 10) {
    scrollActive();
    var mnuH = jQuery(".nav__header").height();
    jQuery('header').addClass('fixed');
    jQuery('.nav__header').css({
      left: wrappPosition.left,
      width: headerW,
    });
    jQuery('heder .logo').css({
      left: wrappPosition.left + 20,

    });



    /*    var hrefID = jQuery(this).attr("id"),
          selector = '#main-nav a[ href="#' + hrefID + '" ]';
        jQuery(selector).addClass('active');*/
  } else {

    jQuery('header').removeClass('fixed');
    jQuery('.nav__header').css({
      left: 0,
      width: '100%',

    });

    scrollActive();
    //jQuery('#main-nav a.active').removeClass('active');
    //jQuery('#main-nav a:first').addClass('active');



    activeMenu();
  }

  jQuery("#main-nav a").hover(function() {

    var linePosition = jQuery(this).offset(),
      wrappPosition = jQuery('.wrapper').offset(),

      mnuW = jQuery(this).parent('li').width();

    jQuery("#bottom_line").css({
      left: linePosition.left - wrappPosition.left,
      //left : 'auto',
      //right: linePosition.leftright,
      width: mnuW,
    });
  });


}).scroll();
