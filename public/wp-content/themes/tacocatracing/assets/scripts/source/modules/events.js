const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
    $('.c__full-events').click(function(){
        $('.c__event-calendar').show();
        $('.c__event-week').hide();
        $('.c__full-events').addClass('event-active');
        $('.c__current-events').removeClass('event-active');
    });

    $('.c__current-events').click(function(){
        $('.c__event-calendar').hide();
        $('.c__event-week').show();
        $('.c__current-events').addClass('event-active');
        $('.c__full-events').removeClass('event-active');
    });

    $('.c__current-events').trigger('click');
  };
  domready(function() {
    _init();
  });
})();
