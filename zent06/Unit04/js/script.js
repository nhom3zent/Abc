$(document).ready(function() {
    $(".menu-button").on("click", function() {
        $("#myNavbar").toggle();
    });

    new WOW().init();


    if ($(".menu li").attr("class") == "active") {
        $(".menu li a").css({ "background": "green" });
    };

    $('.skillbar').each(function() {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 5000);
    });


    // display image in portfolio
    $(".all").on("click", function() {
        $(".portfolio-img").show();
        $(".isotope>div").hasClass(".portfolio-img").show();
    });
    $(".a-html").on("click", function() {
        $(".portfolio-img").show();
        $(".isotope>div").not(".html").hide();

    });
    $(".a-wordpress").on("click", function() {
        $(".portfolio-img").show();
        $(".isotope>div").not(".wordpress").hide();
    });
    $(".a-megento").on("click", function() {
        $(".portfolio-img").show();
        $(".isotope>div").not(".megento").hide();
    });
    $(".a-joomla").on("click", function() {
        $(".portfolio-img").show();
        $(".isotope>div").not(".joomla").hide();
    });

   

});
