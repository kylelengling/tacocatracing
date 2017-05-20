const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  const _init = function() {
      _sliders = $('.c__slider');


      $('.arrow-right').on('click', function(e) {
        e.preventDefault();
        pageCounterUp();
      })
      $('.arrow-left').on('click', function(e) {
        e.preventDefault();
        pageCounterDown();
      })
    slidersPage();
  };


  let _sliders = null;


  let _activePage = 0;
  let _numberOfPages = 0;

  const slidersPage = function(_bottlesPerPage) {
      _activePage = 0;
      _numberOfPages = _sliders.length;
      let _containerWidth = _numberOfPages * 100;
      let _pageWidth = 1 / _numberOfPages

      $('.c__slider').css({
        width: `${_pageWidth * 100}%`
      });
      $('.c__sliders-wrapper').css({
        width: `${_numberOfPages * 100}%`
      });
      moveSlider();
    }



  const pageCounterUp = function() {
    if (_activePage >= _numberOfPages - 1) {
      _activePage = 0;
    } else {
      _activePage++;
    }
    moveSlider();

  }

  const pageCounterDown = function() {
    if (_activePage === 0) {
      _activePage = _numberOfPages - 1;
    } else {
      _activePage--;
    }
    moveSlider();
  }

  const moveSlider = function() {
    $('.c__sliders-wrapper').css('left', `${-_activePage * 100}%`);
  }


  domready(function() {
    _init();
  });
})();
