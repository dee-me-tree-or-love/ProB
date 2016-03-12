$(function() {

    var newHash      = "",
        $infoBody = $("#info_body"), //main content
        $Content    = $("#Content"), // page wrap
        baseHeight   = 0,
        $el;

    $Content.height($Content.height());
    baseHeight = $Content.height() - $info_body.height();

    $("nav").delegate("a", "click", function() {
        window.location.hash = $(this).attr("href");
        return false;
    });

    $(window).bind('hashchange', function(){

        newHash = window.location.hash.substring(1);

        if (newHash) {
            $info_body
                .find("#info_body")
                .fadeOut(200, function() {
                    $info_body.hide().load(newHash + " info", function() {
                        $info_body.fadeIn(200, function() {
                            $Content.animate({
                                height: baseHeight + $Content.height() + "px"
                            });
                        });
                        $("nav a").removeClass("current");
                        $("nav a[href='"+newHash+"']").addClass("current");
                    });
                });
        };

    });

    $(window).trigger('hashchange');

});
