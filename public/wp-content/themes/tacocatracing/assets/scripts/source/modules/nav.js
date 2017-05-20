const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  let $list = null;
  let $logo = null;
  let $nav = null;
  let $win = null;
  let _isOpen = true;
  let _windowWidth = 0;

  const _init = function() {
    $list = $('.site__header ul.nav > li.menu-item');
    $logo = $('.site__header .logo');
    $win = $(window);
    $nav = $('.site__header ul.nav');


    $(document).on('click', '.site__header-menu-toggle', function(e) {
      e.preventDefault();
      _toggleNav();
    });
    $win.on('resize', _onResize);

    _onResize();
    _toggleNav();
  };

  const _toggleNav = function() {
    if (_windowWidth <= 760) {
      _isOpen = !_isOpen;
    } else {
      _isOpen = false;
    }
    if (_isOpen) {
      $nav.addClass('is-open');
    } else {
      $nav.removeClass('is-open');
    }
  };

  const _onResize = function() {
    _windowWidth = window.innerWidth ? window.innerWidth : $win.width();

    let obj = {};
    if (_windowWidth > 960) {
      obj.order = Math.round($list.length * 0.5) + 1;
    } else {
      obj.order = 'unset';
    }

    $logo.css(obj);
  };

  domready(function() {
    _init();
  });
})();
