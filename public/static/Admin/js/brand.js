function set_transform(obj, val){
	obj.style.transform = val;
	obj.style.webkitTransform = val;
}

function get_move_function(div_width, li_width, max, callback){
	var sites = $("#sites")[0];
	var under_line = $("#under_line")[0];
	var brand_header = $("#brand_header")[0];

	return function(i_index){
		/*set_transform(sites, "translateX(-"+i_index*div_width+"px)");*/
		set_transform(under_line, "translateX("+i_index*li_width+"px)");
		if(i_index > 1 &&i_index<=max-3){
			set_transform(brand_header, "translateX(-"+(i_index-1)*li_width+"px)");
		}else if(i_index <= 1){
			set_transform(brand_header, "translateX(0px)");
		}else if(i_index >= max - 2){
			set_transform(brand_header, "translateX(-"+(max - 4)*li_width+"px)");
		}
		setTimeout('unmove = true', 400);
		callback(i_index);
	}
}

unmove = true;
var diffheight=0;
function run_tab(show_page){
	var startX = 0;
	var min = 0;
	var max = $("#brand_header li").length;
	var i_index = 0;
	var move_distance = 100;

	var div_width = $($("#sites")[0]).width();
	$(".site").each(function(index){
		$(this).css("left", index*div_width);
	});
	var li_width = $($("#brand_nav").find("li")[0]).width();

	if(max<4){
		li_width=div_width/max;
		$("#brand_nav li").css("width",li_width);
		$("#under_line").css("width",li_width);
	}
	var move = get_move_function(div_width, li_width, max, show_page);
	$("#brand_nav").find("li").each(function(index){
		$(this).css("left", index*li_width);

		$(this).click(function(){
			if(!unmove){
				return true;
			}
			unmove = false;
			i_index = index;
			move(i_index);
		})
	});
	//设置min-height
	var main_height=$("#main").height();
	var title_top=$(".page__tt").innerHeight();
	var brand_height=$("#brand_header").height();
	 diffheight=main_height-title_top-brand_height;
	if(diffheight>0){
		$("#sites").css("min-height",diffheight);
	}

	$("#sites").on("touchstart", function(){
		if(event.targetTouches.length ==1){
			event.preventDefault();
			startX = event.targetTouches[0].pageX;
		}
	}).on("touchmove", function(){
		if(event.targetTouches.length ==1){
			event.preventDefault();
			if(!unmove){
				return true;
			}
			var touch = event.targetTouches[0];
			var diff = startX - touch.pageX;
			var move_right = diff > move_distance && i_index < max-1;
			var move_left = diff < -move_distance && i_index > min;

			if(move_right || move_left){
				unmove = false;
				if(move_right){
					i_index += 1;
				}else if(move_left){
					i_index -= 1;
				}
				move(i_index);
			}
		}
		return true;
	});

	show_page(0);
}