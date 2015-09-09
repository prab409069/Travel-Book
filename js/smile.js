			var jjj = jQuery.noConflict();
	jjj(document).ready( function() {
		var p = jjj('#smiley-id').html();
		
		var r = p.replace(':)', '<img src="images/smiley/1.gif">');
		jjj('#smiley-id').html(r);
	
	});// JavaScript Document