$(document).ready(function () {

    $('.carousel.carousel-slider').carousel({
        fullWidth: true ,
        duration : 200 ,
        indicators: true

    });


});
/* scroll codepen */
(function($) {


    $.fn.visible = function(partial) {

        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);

var win = $(window);

var allMods = $(".module");

allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("already-visible");
    }
});

win.scroll(function(event) {

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("come-in");
        }
    });

    /* scroll codepen */

    /* subpack codepen */
    $(".image").click(function(){
        hide_image_list();
    });

    function hide_image_list(){
        $(".image").addClass('hide')
            .delay(2000)
            .queue(function(){
                $(this).
                removeClass('hide')
                    .dequeue();
            });
    }
    /* subpack codepen */
});