const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
      _bottles = $('.c__spirit');
      _list = $('.c__spirits-details');


      $('.arrow-right').on('click', function(e) {
        e.preventDefault();
        pageCounterUp();
      })
      $('.arrow-left').on('click', function(e) {
        e.preventDefault();
        pageCounterDown();
      })
      _bottles.on('click', function(e) {
        e.preventDefault();
        setSelected(_bottles.index(this));
      });
      setSelected(0);

      $(window).on('resize', _onResize);
      _onResize();
  };


  let _bottles = null;
  let _list = null;

  const setSelected = function(index) {
    _bottles.removeClass('is-selected');
    _list.removeClass('is-selected');

    _bottles.eq(index).addClass('is-selected');
    _list.eq(index).addClass('is-selected');
  };

  let _bottleWidth = 75;
  let _activePage = 0;
  let _numberOfPages = 0;
  const spiritsPage = function(_bottlesPerPage) {
      _activePage = 0;
      let _pageWidth = _bottlesPerPage * _bottleWidth;
      _numberOfPages = Math.ceil(_bottles.length / _bottlesPerPage);
      $('.c__spirits-selector').css("width" , _pageWidth + "px");
      $('.c__spirits-selector-wrapper').css({
        width: `${_numberOfPages * 100}%`
      });
      moveBottles();
    }



  const pageCounterUp = function() {
    if (_activePage >= _numberOfPages - 1) {
      _activePage = 0;
    } else {
      _activePage++;
    }
    moveBottles();

  }

  const pageCounterDown = function() {
    if (_activePage === 0) {
      _activePage = _numberOfPages - 1;
    } else {
      _activePage--;
    }
    moveBottles();
  }

  const moveBottles = function() {
    $('.c__spirits-selector-wrapper').css('left', `${-_activePage * 100}%`);
  }

  const _onResize = function() {
    let w = $(window).width();
    if (w > 1200 ) {
      spiritsPage(8);
    } else if (w > 970 && w < 1200 ) {
      spiritsPage(6);
    } else if (w > 700 && w < 970 ) {
      spiritsPage(5);
    } else if (w < 700 ) {
      spiritsPage(3);
    }
  };

  domready(function() {
    _init();
  });
})();
