const $ = require('jQuery');

module.exports = (function() {
  const position = {lat: 45.005067, lng: -93.249172};

  const _init = function() {
    $('.js-map').each(function(index) {
      let map = new google.maps.Map(this, {
        center: position,
        disableDoubleClickZoom: true,
        draggable: false,
        mapTypeControl: false,
        scrollwheel: false,
        streetViewControl: false,
        zoomControl: false,
        zoom: 16
      });
      let marker = new google.maps.Marker({
        position,
        map: map
      });

      $(window).on('resize', function() {
        if (map) {
          map.setCenter(position);
        }
      });
    });
  };

  return {
    init: _init
  };
})();
