	$(function(){
		var font = $(".fon li.fo").index();
		var fonwd = $(".fon li.fo").width()+40;
		var right = 0;
		for (var i = 0; i <= font-1; i++) {
			var ss = $(".fon li").eq(i).width();
			right = right + ss+40;
		};
		var css = {
			"width":fonwd,
			"right":right
		}
		$(".tcl").css(css)
	})
	$(".fon li").mouseenter(function(){
		var t = $(this).index();
		var wd = $(this).width()+40;
		var right = 0;
		for (var i = 0; i <= t-1; i++) {
			var ss = $(".fon li").eq(i).width();
			right = right + ss+40;
		};
		$(".tcl").stop().animate({
			"width":wd,
			"right":right
		})
	})