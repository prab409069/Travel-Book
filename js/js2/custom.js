// TWITTER DISPLAY
$(document).ready(function(){
	getTwitters('deadTweets', {
		id: 'Devilcantburn', 
		prefix: '',  // If you want display your avatar and name <img height="16" width="16" src="%profile_image_url%" /><a href="http://twitter.com/%screen_name%">%name%</a> said:<br/>
		clearContents: false, // leave the original message in place
		count: 1, 
		withFriends: true,
		ignoreReplies: false,
		newwindow: true
	});
});
//--------------------------------------------------------------------------

// Dropdown menu
    $(document).ready(function(){
								   
		$('.nav ul ul').css("opacity", "0");
	
		$('.nav ul li').hover(function(){
			$(this).find('ul:first').animate({"opacity": "1"}, 600);
		},
		function(){
			$(this).find('ul:first').animate({"opacity": "0"}, 250);
		});
     });

// Dropdown menu
    $(document).ready(function(){
								   
		$('#portfolio-list li .pl_infos').css("opacity", "0");
	
		$('#portfolio-list li').hover(function(){
			$(this).find('.pl_infos').animate({"opacity": "1"}, 600);
		},
		function(){
			$(this).find('.pl_infos').animate({"opacity": "0"}, 250);
		});
     });
	
// Links animation
$(document).ready(function(){
	$(".nav ul ul a").hover(function(){
		$(this).find('span').stop().animate({marginLeft:'10px'},{queue:false, duration:300, easing: 'easeOutBounce'})
	},function(){
		$(this).find('span').stop().animate({marginLeft:'0px'},{queue:false, duration:300, easing: 'easeOutBounce'})
	});
	
	$(".col_1 li a").hover(function(){
		$(this).find('span').stop().animate({marginLeft:'10px'},{queue:false, duration:300, easing: 'easeOutBounce'})
	},function(){
		$(this).find('span').stop().animate({marginLeft:'0px'},{queue:false, duration:300, easing: 'easeOutBounce'})
	});
 
});

// Teaser hover Fader
$(document).ready(function(){
 	$("#teaser .cols").find(".state_2").css("opacity", "0");
	$("#teaser .cols").hover(
	function() {
	$(this).find(".state_1").stop().animate({"opacity": "0"}, "slow");
	$(this).find(".state_2").stop().animate({"opacity": "1"}, "slow");
	},
	function() {
	$(this).find(".state_1").stop().animate({"opacity": "1"}, "slow");
	$(this).find(".state_2").stop().animate({"opacity": "0"}, "slow");
	});
 
});