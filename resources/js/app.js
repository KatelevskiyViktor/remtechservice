$(document).ready(function (){

        $('[data-toggle="lightbox"]').on('click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });


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



    $('#reload').click(function (e){
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'reload',
            success: function (res){
                $('#captcha-img').html(res.captcha);
            }
        })
    });

})
