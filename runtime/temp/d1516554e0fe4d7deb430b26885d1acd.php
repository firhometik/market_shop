<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\Servers\market_shop\public/../application/admin\view\category\index.html";i:1527005589;s:62:"D:\Servers\market_shop\application\admin\view\public\left.html";i:1526904549;s:64:"D:\Servers\market_shop\application\admin\view\public\footer.html";i:1525962185;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $web['title']; ?></title>
    <link rel="stylesheet" href="/static/Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/Admin/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/static/Admin/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/static/Admin/css/sweet-alert.css">
    <link rel="stylesheet" href="/static/Admin/css/titatoggle-dist-min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/static/Admin/js/jQuery-2.1.4.min.js"></script>
    <style>
        .headDropdown .dropdown-menu{min-width:145px;}
        .headDropdown .dropdown-menu a{font-size: 14px;padding:10px 20px;}
        .headDropdown .rightbtn{background: #D4DAE2}
        .contentListTitle .btnSearch{font-size:24px;position: absolute;right:30px;top:27px;color:#999;z-index: 9}
        .table tr > td:first-child,.table tr > th:first-child{padding-left: 20px;}
        .contentBoxTitle.smallBar .dropdown-menu{width:100%;background:#00a65a;border-radius: 4px;}
        .contentBoxTitle.smallBar .dropdown-menu a{color: #fff}
        .contentBoxTitle.smallBar .dropdown-menu a:hover{background
        :#008d4c}
        .contentBoxTitle.smallBar .headDropdown{position: relative;}
        .table.contentList > tbody > tr.contentItem > td{padding:7px 10px;color:#999;word-break: break-all}
        .contentList .title{color:#555;display:block;height:14px;overflow: hidden}
        .contentList .img{margin-right: -10px;}
        .contentList.table > tbody > tr.contentItem > td.arow{line-height: 36px;}


        .contentList .edittd{position: relative;}
        .contentList .editbox{width:36px;height:36px;position: absolute;top:7px;right:85px;display: none;}
        .contentList .edittd i.iconfont.del{color:#d73925;}
        .contentList .contentItem i.iconfont{width:36px;height:36px;line-height: 36px;float:left;text-align: center;cursor:pointer;background: none}
        .contentList .edittd:hover i.iconfont.edit{background:#367fa9;color:#fff;}
        .contentList .edittd:hover i.iconfont.del{background:#dd4b39;color:#fff;}
        .contentList .edittd:hover i.iconfont.edit:hover{background:#32779E;color:#fff;}
        .contentList .edittd:hover i.iconfont.del:hover{background:#d73925;color:#fff;}

        .contentList .edittd:hover .editbox{display: block;}
        .contentList i.iconfont.put{background:#00a65a;color:#fff;font-size: 16px;}
        .contentList i.iconfont.put:hover{background:#008d4c;}
        .contentList i.iconfont.com{background:#2aabd2;color:#fff; }
        .contentList i.iconfont.com:hover{background:#269abc;}


        .contentList .th-oper{padding-left: 20px}
        .contentList .checkbox{margin-left: 10px;margin-bottom: 0;margin-top: 8px;}

        .contentBoxTitle.smallBar .dropdown-menu{width:100%;background:#00a65a;border-radius: 4px;}
        .contentBoxTitle.smallBar .dropdown-menu a{color: #fff}
        .contentBoxTitle.smallBar .dropdown-menu a:hover{background
        :#008d4c}
        .contentBoxTitle.smallBar .headDropdown{position: relative;}
        .contentBoxTitle .search{position: absolute;left:0;top:20;margin-left: 20px;}
        .contentBoxTitle .search .dropdown-toggle{border-radius: 0;background:#fff;width:141px;}
        .contentBoxTitle .dropdown-menu{width:460px;}
        .contentBoxTitle.contentListTitle .dropdown-menu li a{display: inline-block;font-size: 14px;}
        .contentBoxTitle .dropdown-menu li a.on{background:#367fa9;color:#fff;}
        #search_key:focus{position: relative;}
        .checkAll{top:-4px;margin-left: 10px;margin-right: 20px;}
        .searchUserID{width:180px;margin-right: 15px;float: left}
        .searchTime{width:150px;margin-right: -1px;float: left;position: relative;}
        .searchBtn{margin-left: 5px;float: left;}
        .pagination{margin-right: 10px;}
        h5 .pull-right{margin-left: 10px;}

        .contentRightBox{padding:5px 0;}
        .contentRightBox .tab-pane{padding:5px 20px;}
        .contentRightBox .nav > li > a{padding:5px 20px;border-bottom: 1px solid #ddd;color:#999;}
        .contentRightBox .nav-tabs > li.active > a{border-color:#fff;border-bottom: 2px solid #367fa9;color:#367fa9;padding-bottom: 4px;}
        .contentRightBox .nav > li > a:hover{border-color: #fff;background:#fff;border-bottom: 1px solid #999;}
        .operList > div{padding:6px 0;}
        .btn-group .ms-sel-ctn{padding:3px;}
        .btn-group .form-control{border-radius: 2px;}
        .btn-move{border-radius: 0}
        .btn-del,.contentBind {border-top-left-radius: 0;border-bottom-left-radius: 0}
        .widget_sider{position: absolute;}
        .widget_sider .sider{line-height: 1.4em;top:26px;}
        #move{min-width: 200px;}
        #move a{height:21px;overflow: hidden}
        #move .ListTree{width:11px;margin-right: 6px;}

        .cateList .text-primary{font-weight: bold;}
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini <?php echo $web['sidebar_collapse']; ?>">
<div class="wrapper">
    <header class="main-header">
      <style>
    ::-webkit-scrollbar /*隐藏滚轮*/
display: none;

</style>
<header class="main-header" role="navigation">
    <a href="#" class="logo sidebar-toggle" data-toggle="offcanvas">
        <span class="logo-mini"><i class="iconfont">&#xe60a;</i></span>
        <span class="logo-lg"><b>fireworhome</b></span>
    </a> 
</header>
<aside class="main-sidebar">
    <section class="sidebar" style='overflow: auto;height: 720px'> 
        <div class="user-panel">
            <div class="pull-left image dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/static/Admin/img/1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p><?php echo $myuser['username']; ?></p>
                <a href="javascript:void(0)" >
                    用户中心<i class="iconfont">&#xe60c;</i>
                </a> 
            </div>
            <ul class="dropdown-menu user-menu">
                <li>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#bModal" data-remote="/Setting/myhead">  
                        修改头像
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#bModal" data-remote="/Setting/myinfo">
                        修改个人资料
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#Modal" data-remote="/Setting/getEditPass">  
                        修改密码
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#Modal" data-remote="/Setting/getBindWeixin">  
                        绑定微信
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#Modal" data-remote="/Setting/binduser">
                        绑定手机/邮箱
                    </a>

                <li role="separator" class="divider"></li>
                <li>
                    <a href="javascript:void(0)" data-href="/Login/outLogin/isTrue/1" id='setOutLogin'>安全退出</a>
                </li>
            </ul>
        </div> 

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="/Index.html">
                    <i class="iconfont">&#xe615;</i> <span>主页</span>
                </a> 
            </li>
            <li class="treeview ">
                <a href="#"><i class="iconfont">&#xe614;</i><span>基础管理</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                  <li class="active"><a href="Setting/behaviour"><i class="iconfont">&#xe632;</i> 行为管理</a></li> 
                </ul>
            </li>
            <li class="treeview ">
                <a href="#"><i class="iconfont">&#xe641;</i><span>分类管理</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                   <li class="active"><a href="/Category/index"><i class="iconfont">&#xe61a;</i> 生活服务分类</a></li>
                </ul>
            </li>           


            <li class="treeview ">
                <a href="#"><i class="iconfont">&#xe641;</i><span>内容管理</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                   <li class="active"><a href="Setting/commond"><i class="iconfont">&#xe61a;</i> 广告管理</a></li>
                    <li class="treeview">
                        <a href="#"><i class="iconfont">&#xe641;</i><span>商城维护</span></a>
                        <ul class="treeview-menu">
                            <li  class="active"><a href="Content/gift"><i class="iconfont">&#xe640;</i>礼品管理</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#"><i class="iconfont">&#xe614;</i><span>信息管理</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                    <li class="active"><a href="Jxs/movetask"><i class="iconfont">&#xe633;</i> 奖励活动管理</a></li>
                </ul>
            </li>


            <li class="treeview ">
                <a href="#"><i class="iconfont">&#xe617;</i><span>数据报表</span></a>
            </li>
        </ul>
    </section>
</aside>
<script type="text/javascript">
$(function(){
    $('li.treeview').each(function(){
        if($(this).children('ul.treeview-menu').children('li').length==0){
            $(this).remove();
        }
    })        
})

    
    $("#setOutLogin").click(function () {
        var url = $(this).attr("data-href");
        $.getJSON(url, function () {
            $.ajax({
                url: "http://api.<?php echo APP_DOMAINNAME; ?>/Uc/outLogin",
                dataType: "jsonp",
                jsonp: 'callback'
            });
            window.location.href = "/Login";
            return false;
        })
    })
</script>

    </header>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>

                 生活分类管理
                <small>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>"><i class="iconfont">&#xe615;</i> 后台首页</a>
                        </li>
                        <li>
                            生活分类管理
                        </li>

                    </ol>
                </small>

            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-body box box-none no-padding">
                        <div class="contentBoxTitle contentListTitle">
                            <input type="text" class="form-control input-lg pull" id='search_key' name='key' value="" placeholder="输入标题关键字或ID">
                            <i class="iconfont btnSearch hand" id='search'>&#xe608;</i>
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped contentList">
                                <thead>
                                <tr>
                                <th  class='maxtable'></th>
                                <th >ID</th>
                                <th >分类</th>
                                <th >排序序号</th>
                                <th >新增时间</th>
                                <th >发布状态</th>
                                <th >操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?>
                                <tr class="mailbox-subject contentItem" id='contentListItem-<?php echo $rs['id']; ?>'>
                                    <td class='maxtable'>
                                        <div class="checkbox checkbox-slider--b-errya">
                                            <label>
                                                <input type="checkbox" class='checkItem' data='<?php echo $rs['id']; ?>'/><span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td><?php echo ++$a; ?></td>
                                    <td><?php echo $rs['name']; ?></td>
                                    <td class="listorder">
                                        <input size="3" attr-id="<?php echo $rs['id']; ?>" name="listorder" value="<?php echo $rs['listorder']; ?>"></input>
                                    </td>
                                    <td><?php echo $rs['create_time']; ?></td>
                                    <td class="td-status">
                                        <a href="<?php echo url('category/status',['id'=>$rs['id'],'status'=>1]); ?>" title="点击修改状态"><?php echo status($rs['status']); ?></a>
                                    </td>
                                    <td class="td-manage">
                                        <a href="<?php echo url('category/index',['parent_id'=>$rs['id']]); ?>" style="float: left;line-height: 36px;">获取子栏目</a>
                                        <a style="text-decoration:none" class="ml-5" data-toggle="modal" data-target="#Modal" data-remote="<?php echo url('category/getCategory',['id'=>$rs['id'],'parent_id'=>\think\Request::instance()->get('parent_id')]); ?>" href="javascript:;" title="编辑"><i class="iconfont edit" data='<?php echo $rs['id']; ?>'>&#xe648;</i></a> 
                                        <a style="text-decoration:none" class="ml-5" onClick="setDel('<?php echo url("Category/delcategory",['id'=>$rs['id']]); ?>')" href="javascript:;" title="删除"><i class="iconfont del">&#xe649;</i></a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div><!-- /.mail-box-messages -->
                        <div class="box-header  with-border">
                            <div class='pull-left'>
                                <div class="checkbox checkbox-slider--b-errya pull-left checkAll" >
                                    <label>
                                        <input type="checkbox" id='checkall' /><span></span>
                                    </label>
                                </div>
                                <div class="pull-left xmr">
                                    <button class="btn btn-danger btn-sm contentDel" >
                                        移除
                                    </button>
                                    <button class="btn btn-success btn-sm " data-toggle="modal" data-target="#Modal" data-remote="<?php echo url('category/getCategory',['parent_id'=>\think\Request::instance()->get('parent_id')]); ?>" >
                                        添加分类
                                    </button>
                                </div>
                            </div>
                            <ul class="pagination pull-right ">
                                <li class='paginate_button '>
                                    <?php echo $category->render(); ?>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.box-body -->
                </div>

            </div>
        </section>


    </div>
    <footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.0.0
	</div>
	<strong>Copyright &copy; 2015-2016 <a href="http://www.leoex.com">leoex.com</a>.</strong> All rights reserved.
</footer>
<div id="sModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm " role="document">
		<div class="modal-content"> 
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div id="bModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">  
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div id="Modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-m" role="document">
		<div class="modal-content"> 			 
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<div id="head_div" class="modal fade in head_div" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-head" role="document">
		<div class="modal-content cmd"> 
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="gridModalLabel">头像上传</h4>
			</div>
			<div id="altContent_head"></div>
		</div>
	</div>
</div>
<script src="/static/Admin/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/Admin/js/app.min.js"></script>   
<script src="/static/Admin/js/jquery.form.js"></script>
<script src="/static/Admin/js/sweet-alert.min.js"></script> 
<script>
	$(function(){
		 
		$("#setClearCache").confirm({
			success:function(msg){
				swal({
					"timer":1000,
					'type':"success",
					"text":msg.info,
					"title":"Good job!" 
				});
			}
		})
		$("div.user-panel").on("mouseenter",function(){
			if($("body").hasClass("sidebar-collapse"))
				$(this).addClass("open")
		})
		$("div.user-panel").on("mouseleave",function(){
			if($("body").hasClass("sidebar-collapse"))
				$(this).removeClass("open")
		})
	})
</script>
</div><!-- ./wrapper -->
<script>
    $(function(){

        $("#checkall").change(function(){
            var type = $(this).prop('checked');
            $("input.checkItem").prop('checked',type);
            getSelectContentID();
        })

        //审核操作
        $('#audit a').click(function(){
            var type = $(this).attr("data");
            var id = getSelectContentID();
            setAudit(id,type)
        })

        //移动操作
        $("#move a").click(function(){
            var cate = $(this).attr("data");
            var p = getSelectContentID(true);
            var idlist = p[0];
            var catelist = p[1];
            if(idlist && catelist)
            {
                $.getJSON("/Setting/moveContentCategory/cate/"+cate+"/idlist/"+idlist+"/catelist/"+catelist,function(e){
                    if(e.status)
                    {
                        $(".modal").modal('hide');
                        swal({title:"Good job!",text: e.info,type: "success"},function(isConfirm){
                            window.location.href = "/Setting/content/id/"+cate;
                        });
                    }else
                    {
                        swal("So sad!", e.info, "error")
                    }
                });
            }
        });

        //删除操作
        $("button.contentDel").click(function(){
            var p = getSelectContentID();
            setDel(p)
        });


        $("#search-dropdown-menu").click(function(e){
            if($(e.target)[0].tagName != "A")
                return false;
        })

        $("#search").click(function(){
            var val = $("#search_key").val();
            putKey(val);
        })
        $("#search_key").keypress(function(e) {
            if(e.which == 13) {
                var val = $("#search_key").val();
                putKey(val);
            }
        });

        //绑定
        $(".contentBind").click(function(){
            var id = $("input[name='contentbindid']").val();
            var cate = '';
            if(id &&　cate)
            {
                $.getJSON("/Setting/bindContentCategory/id/"+id+"/cate/"+cate+"/type/1",function(e){
                    if(e.status)
                    {
                        $(".modal").modal('hide');
                        swal({title:"Good job!",text: e.info,type: "success"},function(isConfirm){
                            window.location.reload();
                        });
                    }else
                    {
                        swal("So sad!", e.info, "error")
                    }
                });
            }
        })
    })

    function setDel(url)
    {
        if(!url) return false;
        swal(
                {
                    title: "Are you sure?",
                    text: '真的要删除吗？',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "确定",
                    cancelButtonText: "放弃",
                    closeOnConfirm: false
                },
                function(isConfirm)
                {
                    if(isConfirm)
                    {
                        $.getJSON(url,function(re){
                            if(re.code == 1)
                            {
                               $(".modal").modal('hide');
                                swal({title: "Good job!", text: re.msg, type: "success"}, function (isConfirm) {
                                    window.location.reload();
                                });
                            }else
                            {
                                swal("So sad!", re.msg, "error");
                            }
                        })
                    }
                }
        );

    }

    function getSelectContentID()
    {
        var check = new Array();
        $("input.checkItem:checked").each(function(){
            check.push($(this).attr("data"));
        });
        return check.join(",");

    }
    $('.listorder input').blur(function(){
        var id = $(this).attr('attr-id');
        var listorder = $(this).val();
        var postdata = {
            'id':id,
            'listorder':listorder
        }
        var url = '<?php echo url('category/listorder'); ?>';
        $.post(url,postdata,function(e){
            if (e.code ==1) {
                window.location.href = e.data;
            }else{
                alert(e.msg)
            }
        },'json');
    });
</script>
</body>
</html>
