$(document).ready(function(){
	"use strict";
    $(".next").click(function(){
        $("fieldset").hide();
		var next_fs = $(this).parent().next();
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		next_fs.show(); 
    });
	
	$(".previous").click(function(){
		$("fieldset").hide();
		var previous_fs = $(this).parent().prev();
		var current_fs = $(this).parent();
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		previous_fs.show(); 	
	});
	
	
	
	$(".submit").click(function(){
		return false;
	});
	
});