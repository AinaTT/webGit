/*!
 * jquery.scrollto.js 0.0.1 - https://github.com/yckart/jquery.scrollto.js
 * Scroll smooth to any element in your DOM.
 *
 * Copyright (c) 2012 Yannick Albert (https://yckart.com)
 * Licensed under the MIT license (https://www.opensource.org/licenses/mit-license.php).
 * 2013/02/17
 **/

  

  if (window.location.href.indexOf("/it/") >= 0) {
       $('body').append("<script data-id='xenioo' data-node='app' src='https://static.xenioo.com/webchat/xenioowebchat.js'></script>");
   xenioowebchat.Start("52493cef-41c4-490a-8dd3-7ec44699c762");

  }else if (window.location.href.indexOf("/nl/") >= 0) {
      $('body').append("<script data-id='xenioo' data-node='app' src='https://static.xenioo.com/webchat/xenioowebchat.js'></script>");
      xenioowebchat.Start("4577d544-d1d5-4afd-9198-ef62128464b8");
  }


$.scrollTo = $.fn.scrollTo = function (x, y, options) {
    if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);
    options = $.extend({}, {

        gap: {
            x: 0,
            y: 0
        },
        animation: {
            easing: 'swing',
            duration: 600,
            complete: $.noop,
            step: $.noop
        }
    }, options);

    return this.each(function () {
        var elem = $(this);
        elem.stop().animate({
            scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
            scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
        }, options.animation);
    });
};