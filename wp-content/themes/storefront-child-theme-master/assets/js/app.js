
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

import Glide from '@glidejs/glide'

$(function() {



	
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 350) {
          $("header").addClass("fixedTop");
          $("body").addClass('active-body');
          $(".btn-burguer").addClass('activeColor');
      } else {
          $("header").removeClass("fixedTop");
          $("body").removeClass('active-body');
          $(".btn-burguer").removeClass('activeColor');
      }
  });

  $('.slider').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    });



    
$(".content-top-categoryLogo .btn-vermais").click(function () {
  $(".content-top-categoryLogo .text-category").toggleClass("active");
  });

 $(".content-top-categoryLogo .btn-vermais").click(function (){
    $(".content-top-categoryLogo .open-text").toggleClass("active");
    $(".content-top-categoryLogo .closed-text").toggleClass("active");
 });

  $(".btn-burguer").click(function () {
  $(".nav-bar").toggleClass("active");
  $("nav").toggleClass("active");
  $(".menu-mobile").toggleClass("active");
  $(".blackface").toggleClass("active");

  });
  $(".btn-burguer").on("click", function () {
  $(this).toggleClass("active");

  });

  $(".closedMenu").click(function () {

  $(".menu-mobile").removeClass("active");
  $(".blackface").removeClass("active");
  $(".btn-burguer").removeClass("active");
      event.preventDefault();
  });

$('.btn-anchor a').click(function(event){
  $('html, body').animate({
  scrollTop: $( $.attr(this, 'href') ).offset().top -80 }, 700);
  event.preventDefault();
});

$('.menu-mobile ul li').on('click',function () {
// $('.menu-mobile ul li').removeClass('active');
event.stopPropagation();
$(this).toggleClass('active');

});



  $(".btn-burguer").click(function () {
    $(".nav-mobile").toggleClass('is-open');
    $("body").toggleClass('lock-nav');
    $(".mobile-menu-overlay").toggleClass('is-open');
    $("header").toggleClass('fixedHeader');
  });

  $(".btn-burguer").on("click", function () {
    $(this).toggleClass("active");
  });
  //
  // $(".product-type-simple .price").insertBefore($('form.cart .single_add_to_cart_button'));


    $(".form-header .icon-search").on("click", function () {
      $('.icon-search').addClass("active");
      $('.closed-search').addClass("active");
      $('.form-header form').toggleClass("active");
    });

    $(".closed-search").on("click", function () {
      $('.icon-search').removeClass("active");
      $('.closed-search').removeClass("active");
      $('.form-header form').removeClass("active");
    });


    new Glide('.glide').mount({ Controls, Breakpoints })

});
