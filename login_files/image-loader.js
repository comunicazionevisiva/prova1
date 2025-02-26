


function isHighDensity() {
    return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) || (window.devicePixelRatio && window.devicePixelRatio > 1.3));
}

function isRetina() {
    return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx), only screen and (min-resolution: 75.6dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min--moz-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)').matches)) || (window.devicePixelRatio && window.devicePixelRatio >= 2)) && /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
}

function _src(e, div) {
    e = jQuery(e);
    if ((_s = e.attr("data-img") || e.attr("data-img-2x"))) {
        if (isHighDensity() || isRetina()) {
            _s = e.attr("data-img-2x") || _s;
        }
        if (!div) {
            e.attr("src", "");
            e.removeClass("on");
            e.removeAttr("data-img");
            e.removeAttr("data-img-2x");
            e.attr("src", _s);
        } else {
            div = e.parent();
            e.remove();
            if (!div.hasClass("visible-xs-background")) {
                div.css("background-image", "url(" + _s + ")");
            } else {
                div.attr("data-img", _s);
            }
        }
    }
}
