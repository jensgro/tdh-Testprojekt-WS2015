/* individuelles JS */
$(".accordion .entry").on("click", function() {
    $(".accordion .entry").removeClass("opened").attr("aria-hidden", "true");
    $(this).addClass("opened").attr("aria-hidden", "false");
});
