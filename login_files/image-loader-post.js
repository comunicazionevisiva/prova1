


function imageLoader() {
    /*jQuery("img.on").one("load", function() { _src(this); }).each(function() { if (this.complete) { jQuery(this).load(); } });*/
    jQuery("img.off").one("load", function () {
        _src(this, true);
    }).each(function () {
        if (this.complete) {
            jQuery(this).load();
        }
    });
    if ( $("html").hasClass("pi-mobile") || $("html").hasClass("pi-xs") ) {
        $(".visible-xs-background").each(function () {
            var _e = jQuery(this);
            var _s = _e.attr("data-img");
            if (typeof _s !== "undefined") {
                _e.css("background-image", "url(" + _s + ")");
            }
        });
    }
}
imageLoader();

(function ($, viewport) {
    $(window).resize(
            viewport.changed(function () {
                if ( $("html").hasClass("pi-mobile") || $("html").hasClass("pi-xs") ) {
                    $(".visible-xs-background").each(function () {
                        var _e = jQuery(this);
                        var _s = _e.attr("data-img");
                        if (typeof _s !== "undefined") {
                            _e.css("background-image", "url(" + _s + ")");
                        } else {
                            _e.css("background-image", "none");
                        }
                    });
                }
            }));
})(jQuery, ResponsiveBootstrapToolkit);
