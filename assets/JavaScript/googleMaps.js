const googleMaps = {
    init: function () {
        this.bindEvents();
    },

    bindEvents: function () {
        $('.googleMapsWrapper button.showGoogleMap').on('click', this.showMap);
    },

    showMap: function () {
        let iframe = $('.googleMapsWrapper .map'),
            dataSrc = iframe.data('block-src'),
            googleMapsHintBox = $('.googleMapsWrapper .googleMapsHintBox');

        iframe.attr('src', dataSrc);
        iframe.show();
        googleMapsHintBox.hide();
    }
};

$(document).ready(function() {
    googleMaps.init();
});