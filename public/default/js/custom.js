/* 
    Document   : Synero
    Created on : Aug 23, 2014, 07:07:07 PM
    Author     : Harry
    Description: Synero - one page portfolio & Agency template
    Version    : V1.0
    file: custome js(editable)
*/

/*-------------------------------------------------
 =  Table of Js

 1.Page Preloader
 2.NiceScroll
 3.Navbar-Scroll
 4.Smooth Scroll To Anchor
 5.Parallax
 6.Owl carousel for testimonials
 7.WOW plugin triggers animate.css on scroll
 8.Portfolio-Mix
 9.PrettyPhoto
 10.Scroll to top
 11.Validate Contact Us Data
 12.Contact us submit button event
 
-------------------------------------------------*/

/* ==============================================
1.Page Preloader
=============================================== */
// $(window).load(function() {
// 	$(".loader").delay(300).fadeOut();
// 	$(".animationload").delay(600).fadeOut("slow");
// });
/* ==============================================
2.NiceScroll
=============================================== */
// jQuery("html").niceScroll({
//     scrollspeed: 50,
//     mousescrollstep: 38,
//     cursorwidth: 7,
//     cursorborder: 0,
//     cursorcolor: '#e12444',
//     autohidemode: false,
//     zindex: 9999999,
//     horizrailenabled: false,
//     cursorborderradius: 0
// });
/* ==============================================
3.Navbar-Scroll
=============================================== */
//transperent nav
// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 1) {
//         $(".navbar-fixed-top").addClass("navbar-bg");
//     } else {
//         $(".navbar-fixed-top").removeClass("navbar-bg");
//     }
// });
/* ==============================================
4.Smooth Scroll To Anchor
=============================================== */
//jQuery for page scrolling feature - requires jQuery Easing plugin
// $(function() {
//     $('.navbar a').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top - 50
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     });
// });
/* ==============================================
5.Parallax
=============================================== */
// $(window).stellar({
//     horizontalScrolling: false,
//     responsive: true,
//      scrollProperty: 'scroll',
//      parallaxElements: false,
//      horizontalScrolling: false,
//      horizontalOffset: 0,
//      verticalOffset: 0
// });
/* ==============================================
6.Owl carousel for testimonials
=============================================== */
// $(document).ready(function() {
//     $("#testi-carousel").owlCarousel({
//         // Most important owl features
//         items: 1,
//         itemsCustom: false,
//         itemsDesktop: [1199, 1],
//         itemsDesktopSmall: [980, 1],
//         itemsTablet: [768, 1],
//         itemsTabletSmall: false,
//         itemsMobile: [479, 1],
//         singleItem: false,
//         startDragging: true,
//         autoPlay: true
//     });
// });
/* ==============================================
7.WOW plugin triggers animate.css on scroll
=============================================== */
// var wow = new WOW(
//     {
//         boxClass: 'wow', // animated element css class (default is wow)
//         animateClass: 'animated', // animation css class (default is animated)
//         offset: 100, // distance to the element when triggering the animation (default is 0)
//         mobile: false        // trigger animations on mobile devices (true is default)
//     }
// );
// wow.init();
/* ==============================================
8.Portfolio-Mix
=============================================== */
//  jQuery('#grid').mixitup({
//         targetSelector: '.mix',
// });;
/* ==============================================
9.PrettyPhoto
============================================== */
// $(document).ready(function(){
//     $("a[data-rel^='prettyPhoto']").prettyPhoto({
//         animation_speed: 'fast', /* fast/slow/normal */
//         slideshow: 5000, /* false OR interval time in ms */
//         autoplay_slideshow: false, /* true/false */
//         opacity: 0.80, /* Value between 0 and 1 */
//         show_title: true, /* true/false */
//         allow_resize: true, /* Resize the photos bigger than viewport. true/false */
//         default_width: 500,
//         default_height: 344,
//         counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
//         theme: 'facebook', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
//         horizontal_padding: 20, /* The padding on each side of the picture */
//         autoplay: true, /* Automatically start videos: True/False */
//         social_tools: ''
//     });
// });
/* ==============================================
10.Scroll to top
=============================================== */ 
// $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//         $('.back-to-top').fadeIn();
//     } else {
//         $('.back-to-top').fadeOut();
//     }
// }); 

// $('.back-to-top').click(function(){
//     $("html, body").animate({ scrollTop: 0 }, 1000);
//     return false;
// });
/* ==============================================
11.Validate Contact Us Data
=============================================== */
// function ValidateContactUs() {

//     var title = $("#name").val();

//     var err = "";
//     if (title == "Name" || title == "" || title == null) {
//         $("#name").addClass("validation");

//         var err = "error";
//     } else {
//         $("#name").removeClass("validation");
//     }
//     var email = $("#email1").val();
//     if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
//         $("#email1").addClass("validation");

//         var err = "error";
//     } else {
//         $("#email1").removeClass("validation");
//     }
//     var title = $("#message").val();
//     if (title == "Message" || title == "" || title == null) {
//         $("#message").addClass("validation");
//         var err = "error";
//     } else {
//         $("#message").removeClass("validation");
//     }
//     return err;
// }
/* ==============================================
12.Contact us submit button event
=============================================== */
// $("#submit_btn").click(function(e) {
//     if (ValidateContactUs() == "") {
//         var resulttext = $.ajax({
//             type: "POST",
//             url: "contact.php",
//             data: $("#form1").serialize(),
//             async: false,
//             success: function(status) {}
//         }).responseText;

//         $("#successmsg1").html(resulttext);
//         $("#form1").delay(100).slideUp(1000, function() {

//             $('#successmsg1').delay(500).slideDown(500);
//         });
//         $("#name").val('');
//         $("#email1").val('');
//         $("#message").val('');
//     }
//     e.preventDefault();
//     return false;
// });