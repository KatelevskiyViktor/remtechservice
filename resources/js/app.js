$(document).ready(function (){
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },

        }
    });

    $(".nav_search-btn").click(function () {
        if ($(".nav_search-input").hasClass("d-none")) {
            event.preventDefault();
            $(".nav_search-input")
                .animate({
                        left: "-1000px"
                    },
                    "1000000"
                )
                .removeClass("d-none");
        } else {
            $(".nav_search-input")
                .animate({
                        left: "0px"
                    },
                    "1000000"
                )
                .addClass("d-none");
        }
    });

})
