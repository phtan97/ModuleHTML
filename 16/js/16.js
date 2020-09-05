$(document).ready(function () {
    $('#owl-demo').owlCarousel({
        loop: true,
        autoPlay: 100,
        autoplay:true,
        autoplaySpeed:1000,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        navigationText : ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>','<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
        responsive: {
            0:{
                items:1
            },
            500: {
                items: 1
            },
            769: {
                items: 1
            }
        }
    })
    $('#click').click(function () {
        $(this).css({
            "opacity" :"1",
            });
    });
    $('#click1').click(function () {
        $(this).css({
            "opacity" :"1",
            });
    });
    $('#click2').click(function () {
        $(this).css({
            "opacity" :"1",
            });
    });
});
       