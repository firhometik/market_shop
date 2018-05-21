<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"G:\market_shop\public/../application/admin\view\category\getCategory.html";i:1526893482;}*/ ?>
<style>
    .c-red{color: red;}
    .select{height: 34px;line-height: 34px;}
</style>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title" id="gridModalLabel">添加生活分类</h4>
</div>
<div class="form-horizontal">
    <form method="post" id='pushCommend' action='/Category/setCategory'>
        <div class="modal-body topicsCommed">

            <input type="hidden" name='id' value="<?php echo $cate['id']; ?>">

            <div class="tab-content clearfix" id='comcentent'>
                <div class="form-group" style="margin-bottom: 5px">
                    <label for="commend " class=" form-label col-xs-4 "><span class="c-red">*</span>生活服务分类名称：</label>
                    <div class="formControls col-xs-8 ">
                    <input type="text" class="form-control" name='name' value="<?php echo $cate['name']; ?>">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                    <label class="form-label col-xs-4 "><span class="c-red">*</span>分类栏目：</label>
                    <div class="formControls col-xs-8 ">
                    <select name="parent_id" class="select" style="width: 100%;">
                        <option value="0">一级栏目</option>
                        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $rs['id']; ?>" <?php if($rs['id'] == $cate['parent_id']): ?>selected<?php endif; ?> >--<?php echo $rs['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>                           
                    </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="submit" class="btn btn-success">提交</button>
        </div>
    </form>
</div>
<script>
    $(function () {
        $("#pushCommend").ajaxForm(function (e) {
            $("#pushCommend").data("lock", false)
            if (e.status) {
                $(".modal").modal('hide');
                swal({title: "Good job!", text: e.info, type: "success"}, function (isConfirm) {
                    window.location.reload();
                });
            } else {
                swal("So sad!", e.info, "error")
            }
        });
    })
</script>

