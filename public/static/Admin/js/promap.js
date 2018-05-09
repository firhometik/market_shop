$.fn.promap = function(v,uid){
    var _this = $(this)
	
	
	var src = _this.find(".promap_map > img").attr("src");
	
    var img = new Image();
        img.src = src;
		var timer = setInterval(function() {
                if (img.complete) {
                    init();
                    clearInterval(timer)
                }
        }, 50)
	function init()
	{
		var w = _this.find(".promap_map").width(); //图片的宽度
		var h = _this.find(".promap_map").height(); //图片的高度
		var t = _this.find(".promap_map").offset().top; //偏移的高
		var l = _this.find(".promap_map").offset().left; //偏移的宽
		var r = l+w;
		var b = t+h;
		var page = 1;
		var limit = 6;  
		var keyword
		var cateid
		var series
		//加载已经存在的图片及位置
		$(document).ready(function() { 
			if(v){
				var arr = v.split(",");
				for(var i = 0;i < arr.length; i++)
				{
					var li = arr[i].split("|");
					var cid = li[0];
					var csrc = li[1];
					var cleft = li[2];
					var ctop = li[3];
					var cstr = $("<li/>").html("<p>+</p><img src='"+csrc+"' class='promap_z'><input type='hidden' value='"+cid+"'>").css({'position':'absolute',"left":cleft,"top":ctop}).addClass("keyname");
					
					drag(cstr)
					_this.find(".promap_map ul.promap_pospro").append(cstr)
				}
			}
			_this.find(".droppable").css({"left": w-65,"top":h-65})
			//_this.find(".droppable1").css({"left": w-115,"top":h-50})
		})
		
		// 右下删除和修改图片 设置可拖动
		/*_this.find(".droppable1").draggable({ 
			containment: _this.find(".promap_map"), 
			scroll: false,
			start: function(){
				
			},
			stop:function(){
				
			}
		});*/
		_this.find(".droppable").draggable({ 
			containment: _this.find(".promap_map"), 
			scroll: false,
		});
		
		
		//点击右边图片 加入 并设置拖动
		_this.find(".prolist").off().on("click","li",function(){
			var src = $(this).children("img").attr("src")
			var id = $(this).attr("data")
		
			var elem = $("<li/>").html("<p>+</p><img src='"+src+"' class='promap_z'><input type='hidden' value='"+id+"'>").css({'position':'absolute',"left":"15px","top":"15px"}).addClass("keyname");
			drag(elem)
			_this.find(".promap_map ul.promap_pospro").append(elem)
			getkey()
		});
		
		
		//删除
		_this.find(".droppable").droppable({  
			containment: _this.find(".promap_map"), 
			handle:true,
			drop: function( event, ui ) { 
				ui.draggable.remove()
				getkey()
			}
		});
		
		
		//设置图片显示hover 内容
		_this.find(".promap_map").on('mouseenter','li',function(e){
			var _this = $(this);	
			var ex = e.pageX;
			var ey = e.pageY;
			var dw = _this.children("img.promap_z").width();
			var dh = _this.children("img.promap_z").height();
			
			if(ex>r-135)
				_this.children("img.promap_z").css('left', -dw)
			if(ey>b-135)
				_this.children("img.promap_z").css('top',-dh - 20)
		}) 
		_this.find(".promap_map").on('mouseleave','li',function(e){
			$(this).children("img.promap_z").removeAttr("style");
		}) 
		
		// 搜索  上下页
		_this.find(".queding").click(function(){
			keyword = _this.find(".keyword").val()
			cateid = _this.find(".cateid").val()
			series = _this.find(".series").val()
			//uid = _this.find("#uid").val()
			//if(!uid)
			//{
			//	uid = $("body").find("input[name='c_userid']").val()
			//}
			
			page = 1;
			getlist(keyword,uid,cateid,series)
			_this.find("#thisprevnext").css("display","block")
			_this.find("#thisshuoming").css("display","none")
			
			
		})
		_this.find(".prev").click(function(){
			if(page != 1)  page--
			getlist(keyword,uid,cateid,series)
		})
		_this.find(".next").click(function(){
			page++
			getlist(keyword,uid,cateid,series)
		})
	
	
		function drag(str)
		{
			str.draggable({
				addClasses: false,
				cancel: 'button',
				containment: _this.find(".promap_map"),
				scroll: false,
				snapMode: 'outer',
				offset:true,
				start: function(){
					$(this).children("img.keyname").removeClass("promap_z")
				},
				stop: function() {
					var offset = $(this).offset();		
					$(this).children("img.keyname").addClass("promap_z")	
					getkey()
				}
			});
		}
		
		function getkey()
		{
			var mstr = ""
			_this.find(".promap_map").find(".keyname").each(function(){
				var left = ($(this).css("left").slice(0,-2))/(w)*100+"%"
				var top = ($(this).css("top").slice(0,-2))/(h)*100+"%"
				mstr += $(this).children("input").val() + "|" + left + "|" + top +","
			})
		
			mstr = mstr.slice(0,-1)
			_this.find(".mthisinput").val(mstr)
		}
		function getlist(keyword,uid){
			
				var ustr = "";
				// if(uid)
				// {
					// ustr += "/uid/"+uid;
				// }
				if(keyword)
				{
					ustr += "/keyword/"+keyword;
				}	
				if(cateid)
				{
					ustr += "/cateid/"+cateid;
				}
				if(series)
				{
					ustr += "/series/"+series;
				}					
				$.getJSON("/Public/ajaxProlist/page/"+page+"/limit/"+limit+ustr,function(msg){
					if(msg.status == 1) 
					{
						_this.find(".prolist").empty();
						data = msg.info;
						
						var prostr = "";
						for(i=0;i < data.length;i++)
						{
							prostr += "<li data='"+data[i]["id"]+"'><img src='"+data[i]["thumb"]+"' title='名称:"+data[i]["title"]+"' ><p>"+data[i]["title"]+"</p></li>" ;
							
						}
					
						_this.find(".prolist").append(prostr)
					}
					else{
						_this.find(".prolist").empty();
						_this.find(".prolist").append("没有数据")
						return false
					}
					
				})
			
		}
	}
	
}