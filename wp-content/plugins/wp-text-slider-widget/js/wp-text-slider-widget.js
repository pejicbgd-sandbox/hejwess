jQuery(document).ready(function ($) {
    $("#ca-wp-text > div:gt(0)").hide();

    setInterval(function () {
        $("#ca-wp-text > div:first")
            .fadeOut(0)
            .next()
            .fadeIn(1500)
            .end()
            .appendTo("#ca-wp-text")
    },3500);
});