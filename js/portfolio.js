$(document).ready(function(){
	$("a.lightbox img").hover(
		function(){$(this).stop().animate({opacity:0.5},"slow");},
		function(){$(this).stop().animate({opacity:1},"slow");}
	);
	
	$("a.switch_thumb").toggle(function(){
			$(this).addClass("swap");
			$("li.grid_view").fadeOut("fast", function() {
				$("a.lightbox").addClass("grid_4");
				$("li.grid_view div.text").addClass("grid_8");
				$(this).fadeIn("fast").removeClass("grid_view").removeClass("grid_4").addClass("list_view");
			});
		}, function () {
			$(this).removeClass("swap");
			$("li.list_view").fadeOut("fast", function() {
				$("a.lightbox").removeClass("grid_4");
				$("li.list_view div.text").removeClass("grid_8");
				$(this).fadeIn("fast").removeClass("list_view").addClass("grid_view").addClass("grid_4");
			});
		});
});