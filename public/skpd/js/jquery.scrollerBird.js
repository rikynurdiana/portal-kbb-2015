// jQuery ScrollerBird
//********************
// A Simple and Lightweight jQuery plugin for easy page scrolling.
// version 1.2 / March 03, 2012
// Developed by Designova Webtech.
// http://www.designova.net/plugins/ScrollerBird
// Copyright © 2001 Designova Webtech. All rights reserved.
// Released under GPL.
 

jQuery.fn.scrollerBird = function(options) {

 	options = jQuery.extend({
		speed : 1500,
		easing: 'linear',
	}, options);	
	
	return this.each(function(){
		var invoker = this;
		$(invoker).click(function (event) {	
			event.preventDefault();
			var locationHref = window.location.href;
			var anchorClick = $(invoker).attr("href");
			
			var destination = $(anchorClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, options.speed, options.easing, function() {
				window.location.hash = anchorClick;
			});
		  	return false;
		})
	})
}