/*页面 全屏-添加*/
function o2o_edit(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*添加或者编辑缩小的屏幕*/
function o2o_s_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
/*-删除*/
function o2o_del(url){
	
	layer.confirm('确认要删除吗？',function(){
		$.get(url,function(e){
			if (e.code == 1) {
				alert('删除成功');
				window.location.href = e.data;
			}else{
				alert(e.msg)
			}
		})
	});
}

$('.listorder input').blur(function(){
	var id = $(this).attr('attr-id');
	var listorder = $(this).val();
	var postdata = {
		'id':id,
		'listorder':listorder
	}
	var url = SCOPE.listorder_url;
	$.post(url,postdata,function(e){
		if (e.code ==1) {
			window.location.href = e.data;
		}else{
			alert(e.msg)
		}
	},'json');
});