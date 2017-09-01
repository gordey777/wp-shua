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


var $headH = $('#header').height();
//alert($headH );
$("#section-1").css("margin-top", $headH + "px");




(function($) {
  $(window).load(function() {

    $("#main-nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
      highlightSelector: "#nav-menu a"
    });

    $("a[rel='next']").click(function(e) {
      e.preventDefault();
      var to = $(this).parent().parent("section").next().attr("id");
      $.mPageScroll2id("scrollTo", to);
    });

  });
})(jQuery);

(function($) {
  $(window).load(function() {

    $("#main-nav a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({

      scrollSpeed: 1300,
      autoScrollSpeed: true,
      pageEndSmoothScroll: true,
      offset: $headH,
      forceSingleHighlight: false,
      highlightByNextTarget: false,
      /* disable plugin below [x,y] screen size: boolean, integer, array ([x,y]) */
      disablePluginBelow: false,
    });
  });
})(jQuery);
