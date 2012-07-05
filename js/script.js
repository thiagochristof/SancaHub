$(function(){
	
	/* menu buttons */	
	$(".button-whatis").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: $($(this).attr("href")).offset().top - 25}, 1000);
	});
	$(".button-getinvolved").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: $($(this).attr("href")).offset().top - 25}, 1000);
	});
	
	/* top button */
	$(".button-top").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: $($(this).attr("href")).offset().top}, 1000);
	});
	
});