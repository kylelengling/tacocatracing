const $ = require('jQuery');
const domready = require('domready');
const overlay = require('./overlay.js');

module.exports = (function() {
  let els = {};

  const _init = function() {
    els.doc = $(document);

    _events();

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
      let bgVideo = document.querySelector('.bg-video');
      bgVideo.parentElement.removeChild(bgVideo);
    }
  };

  const _events = function() {
    els.doc.on('click', '.js-video', function(e) {
      overlay.open('vimeo', $(this).data('vimeo-id'));
    });
  };

  domready(function() {
    _init();
  });
})();
