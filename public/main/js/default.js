/**
 * moutheme: default javascript
 * @license MIT
 */
 
/*******************
 * Hide Search Click Outside
********************/
 
 $(document).on("mouseup", function (e)
{
    var container = $('.search-result')

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide()
    }
	return false;
});

/*******************
 * TweetCool Settings
********************/

 $(document).on("ready",function() { 'use strict';
      $('#tweecool').tweecool({
      	//settings
      	 username : 'collis', 
         limit : 2
      })
	  return false;
  });
  
/*******************
 * Video Background Resize
********************/

    $(function () { 'use strict';
  
  var outerDiv = $('.video-wrapper')
  var videoTag = outerDiv.find('video')
  
  $(window).resize(resize)
  resize()
  
  function resize() {
    var width = outerDiv.width()
    var height = outerDiv.height()
    var aspectW = 16
    var aspectH = 9
    var scaleX = width / aspectW
    var scaleY = height / aspectH
    var scale = Math.max(scaleX, scaleY)
    var w = Math.ceil(aspectW * scale)
    var h = Math.ceil(aspectH * scale)
    var x = 0
    var y = 0
    if (w > width) x = -(w - width) * 0.5
    if (h > height) y = -(h - height) * 0.5
     
    videoTag.css({
      width: w,
      height: h,
      top: y,
      left: x
    })
  }
  return false;
});

/*******************
 * mixItUp Start
********************/

$(function(){ 'use strict';
	$('#Grid').mixItUp({
	animation: {
		duration: 500,
	}
	})
	return false;
});

/*******************
 * Stellar Start
********************/

 $(function(){ 'use strict';
		$(window).stellar({
		        verticalScrolling: true,
				horizontalScrolling: false,
				verticalOffset: 40
			})
			return false;
        });
		
/*******************
 * WOW Start
********************/

new WOW().init();