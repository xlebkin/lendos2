$(document).ready(function(){
	$('.slider').slick({
		arrows:true,
		dots:true,
		autoplay:true,
		speed:1000,
		autoplaySpeed:3500,
	});
});

$('a[href^="#"').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 400,
        easing: "linear"
    });

    return false;
});