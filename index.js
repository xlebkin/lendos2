"use strict"

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
        duration: 500,
        easing: "linear"
    });

    return false;
});

enquire.register('screen and (min-width: 951px)', {
    match:$(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $(".scroll-up").css("display", "block");
        } else {
            $(".scroll-up").css("display", "none");
        }
    }),

    unmatch: function() {
        $(".scroll-up").css("display", "none");
    },
});

const image1 = document.getElementsByClassName('parallax1');
const image2 = document.getElementsByClassName('parallax2');
const image3 = document.getElementsByClassName('parallax3');
const image4 = document.getElementsByClassName('parallax4');
const image5 = document.getElementsByClassName('parallax5');

new simpleParallax(image1, {
    orientation: 'right',
    overflow: true
});

new simpleParallax(image2, {
    orientation: 'left',
    overflow: true
});

new simpleParallax(image3, {
    orientation: 'right',
    overflow: true
});

new simpleParallax(image4, {
    orientation: 'left',
    overflow: true
});

new simpleParallax(image5, {
    orientation: 'right',
    overflow: true
});

$(function() {
    $('form button').click(function() {
      if (!$('#checkbox').prop('checked')) {
        return false;
      }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
    
    async function formSend(e) {
        e.preventDefault();

        let formData = new FormData(form);
        let response = await fetch('sendmail.php', {
            method: "POST",
            body: formData
        });
    }
});