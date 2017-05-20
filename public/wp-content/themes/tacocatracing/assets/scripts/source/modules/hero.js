const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
    $('.c__hero').each(function(index, item) {
      let items = $(item).find('.c__hero-bg-item');
      let bgItemTimeout;
      if (items.length > 1) {
        let active = 0;

        function changeActive() {
          clearTimeout(bgItemTimeout);
          items.removeClass('is-active');
          items.eq(active).addClass('is-active');
          active++;
          if (active >= items.length) {
            active = 0;
          }
          bgItemTimeout = setTimeout(changeActive, 8000);
        }
        changeActive();
      } else if (items.length === 1) {
        items.eq(0).addClass('is-active');
      }
    });
    if (window.location.search.indexOf('status=thankyou') > -1) {
      $('#formEmailContent').css('display', 'none');
      $('#formEmailThanks').css('display', 'block');
    }
  };

  domready(function() {
    _init();
  });
})();
