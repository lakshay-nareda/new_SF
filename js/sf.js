var swiper = new Swiper(".sf_h_slider", {
    effect: "coverflow",
    //grabCursor: true,
    centeredSlides: true,
    slidesPerView: "5",
    spaceBetween: 0,
    loop: true,
    loopedSlides: 5,
    speed: 1000,
    preloadImages: true,
    updateOnImagesReady: true,
    coverflowEffect: {
        rotate: 80,
        depth: -200,
        modifier: .4,
        scale: 1.2,
    },
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
});


$(".sf_se").click(function () {
    $(".sf_bo").toggleClass("sf_bo_s");
});
$(".sf_ci").click(function () {
    $(".sf_bo").removeClass("sf_bo_s");
});


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
        if (!$('.sf_se').hasClass('sf_se_v')) {
            $('.sf_se').addClass('sf_se_v');
        }
    } else {
        if ($('.sf_se').hasClass('sf_se_v')) {
            $('.sf_se').removeClass('sf_se_v');
        }
    }
});


$(document).ready(function () {

    $('.sf_a_tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('.sf_a_tabs li').removeClass('current');
        $('.sf-tabs_c').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

})