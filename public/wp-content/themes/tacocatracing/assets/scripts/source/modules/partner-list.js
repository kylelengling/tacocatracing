const $ = require('jQuery');
const domready = require('domready');

module.exports = (function() {
  let $list = null;
  let $partnerTextList = null;
  let $partnerListToggle = null;

  const _init = function() {
    $partnerTextList = $('.c__partner-text-list');
    $partnerListToggle = $('.js-toggle-partner-list');

    $partnerListToggle.on('click', _togglePartnerList);
  };

  const _togglePartnerList = function() {
    let isOpen = $partnerTextList.css('display') === 'block';

    $partnerListToggle.text(isOpen ? 'View All' : 'Close');
    $partnerTextList.css('display', isOpen ? 'none' : 'block');
  };

  domready(function() {
    $list = $('.c__partner-list');
    if ($list.length) {
      _init();
      _togglePartnerList();
    }
  });
})();
