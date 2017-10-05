/**search**/
$(document).ready(function(){
	$(".bixslider").bxSlider();

	$("#btn").on("click",function(){
		$(".search-btn").fadeToggle(200);
	});
	
});


/*$(document).ready(function(){
	$("#btn-bar").on("click",function){
		$(".menu-bar").css("display","block");
	}
});*/


/**lentop**/
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
			$("#updown").fadeIn(200);
		}else{
			$("#updown").fadeOut(200);
		}
	});
	$(".updown-header").on("click",function(){
		$("html,body").animate({scrollTop:0},600);
		return false; 
	});
});

/**luachon**/
$(document).ready(function(){
	$("#down").on("click",function(){
		$(".lua-chon-content-1-content").toggle(400);
		$(".title").css("background","#c4161c").css("color","white");
	});

});
$(document).ready(function(){
	$("#downup").on("click",function(){
		$(".lua-chon-content-2-content").toggle(400);
		$(".title").css("background","#c4161c").css("color","white");
	});

});
/*menu**/
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>200){
			$("#header-scroll").fadeIn(200);
			
		}else{
			$("#header-scroll").fadeOut(200);
		}
	})
});

