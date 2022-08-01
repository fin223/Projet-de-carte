$(document).ready(function(){
	
	
	var userAgent = window.navigator.userAgent.toLowerCase();
	var iconPOS = $(".main-visual").height();
	
	/*- è¨€èªžåˆ‡ã‚Šæ›¿ãˆ -*/
	$(".reg-lng>dl>dt").addClass("close");
	$(".reg-lng>dl").click(function(){
		
		if($("dt",this).attr("class") == "close"){
			$("dd",this).slideDown("fast");
			$("dt",this).removeClass();
			$("dt",this).addClass("open");
		}else{
			$("dd",this).slideUp("fast");
			$("dt",this).removeClass();
			$("dt",this).addClass("close");
		}
	});
	$(".reg-lng>dl").mouseleave(function(){
		$("dd",this).slideUp("fast");
		$("dt",this).removeClass();
		$("dt",this).addClass("close");
	});
	$(document).scroll(function () {
		$(".reg-lng>dd").slideUp("fast");
		$("dt",this).removeClass();
		$("dt",this).addClass("close");
	});
	
	/*--*/
	$("a.movie").colorbox({
			iframe:true,
			innerWidth:$(window).width()*0.9,
			innerHeight:$(window).width()*0.9/16*9,
			initialWidth:300,
			initialHeight:300
		});
		
		$(window).resize(function(){$.colorbox.close();});
	
	/*--*/
	$("a[href^=#]:not(.open-detail)").click(function(){
	    var speed = 500;
	    var href= $(this).attr("href");
	    var target = $(href == "#" || href == "" ? 'html' : href);
	    var position = target.offset().top;
	    $("html, body").animate({scrollTop:position}, speed, "swing");
	    return false;
	});
	
		
	$(".content").mCustomScrollbar({
		theme: "light-3"
	});
	
	$(".inview").on("inview", function (event, isInView) {
		if (isInView) {
			$(this).stop().addClass("is-show");
		}
	});		


	$("a[href^=#]:not([href^=#cardsearch],a.cbox , .inview)").click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
	
	/*--*/
	stage = new createjs.Stage("myCanvas");
	particleSystem = new particlejs.ParticleSystem();
	stage.addChild(particleSystem.container);
	particleSystem.importFromJson(
	/*
	{
	    "bgColor": "transparent",
	    "width": 1024,
	    "height": 1024,
	    "emitFrequency": 21,
	    "startX": 524,
	    "startXVariance": 1024,
	    "startY": 501,
	    "startYVariance": 857,
	    "initialDirection": 270,
	    "initialDirectionVariance": 54.5,
	    "initialSpeed": 0.5,
	    "initialSpeedVariance": "0",
	    "friction": 0.1065,
	    "accelerationSpeed": 0.107,
	    "accelerationDirection": 270,
	    "startScale": 0.08,
	    "startScaleVariance": 0.27,
	    "finishScale": 0.2,
	    "finishScaleVariance": 0.37,
	    "lifeSpan": 27,
	    "lifeSpanVariance": 259,
	    "startAlpha": 0.28,
	    "startAlphaVariance": "1",
	    "finishAlpha": "0",
	    "finishAlphaVariance": "0",
	    "shapeIdList": [
	        "blur_circle"
	    ],
	    "startColor": {
	        "hue": 202,
	        "hueVariance": 0,
	        "saturation": 47,
	        "saturationVariance": 0,
	        "luminance": "100",
	        "luminanceVariance": "47"
	    },
	    "blendMode": true,
	    "alphaCurveType": "0",
	    "VERSION": "1.0.0"
	}
	*/
	
{
    "bgColor": "transparent",
    "width": 1024,
    "height": 1024,
    "emitFrequency": 13,
    "startX": 512,
    "startXVariance": 512,
    "startY": 734,
    "startYVariance": 879,
    "initialDirection": 270,
    "initialDirectionVariance": 116,
    "initialSpeed": 0.1,
    "initialSpeedVariance": 1.7,
    "friction": 0,
    "accelerationSpeed": 0.015,
    "accelerationDirection": 265,
    "startScale": 0.33,
    "startScaleVariance": 0.04,
    "finishScale": "0",
    "finishScaleVariance": "0",
    "lifeSpan": 214,
    "lifeSpanVariance": 89,
    "startAlpha": 1,
    "startAlphaVariance": 0,
    "finishAlpha": 0.85,
    "finishAlphaVariance": "0",
    "shapeIdList": [
        "blur_circle"
    ],
    "startColor": {
        "hue": 300,
        "hueVariance": 9,
        "saturation": 100,
        "saturationVariance": 0,
        "luminance": 28,
        "luminanceVariance": 0
    },
    "blendMode": true,
    "alphaCurveType": "1",
    "VERSION": "1.0.0"
}
	
	
	);
	createjs.Ticker.framerate = 60;
	createjs.Ticker.timingMode = createjs.Ticker.RAF;
	createjs.Ticker.addEventListener("tick", handleTick);


    function handleTick() {
      particleSystem.update();
      stage.update();
    }


});