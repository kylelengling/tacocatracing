const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
    $(document).on('closing', '.remodal', function (e) {
      $('#vimeoOverlay').attr('src', '');
    });
  };

  const _open = function(type, id) {
    if (type === 'vimeo') {
      $('#vimeoOverlay').attr('src', `https://player.vimeo.com/video/${id}?autoplay=1`);
    }
  };

  domready(function() {
    _init();
  });

  return {
    open: _open
  };
})();
