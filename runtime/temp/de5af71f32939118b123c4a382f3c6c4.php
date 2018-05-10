<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\Servers\market_shop\public/../application/admin\view\index\index.html";i:1525962185;s:62:"D:\Servers\market_shop\application\admin\view\public\left.html";i:1525962185;s:64:"D:\Servers\market_shop\application\admin\view\public\footer.html";i:1525962185;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $web['title']; ?></title> 
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
    <link rel="stylesheet" href="/static/Admin/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="/static/Admin/css/AdminLTE.min.css"> 
    <link rel="stylesheet" href="/static/Admin/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/static/Admin/css/sweet-alert.css">
    <script src="/static/Admin/js/jQuery-2.1.4.min.js"></script> 
<style>
     .contentList .edittd{position: relative;}
        .contentList .editbox{width:72px;height:36px;position: absolute;top:9px;right:85px;display: none;}
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
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td{padding:9px;}

     </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini <?php echo $web['sidebar_collapse']; ?>">
    <div class="wrapper">
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
                <p>hello</p>
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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> 
            系统管理平台
          </h1> 
        </section>

        <!-- Main content -->
        <section class="content"> 
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>1</h3>
                            <p>昨日新增内容</p>
                        </div>
                        <div class="icon">
                        <i class="ion iconfont">&#xe603;</i>
                        </div>
                        <a href="/News/index.html?time=1" class="small-box-footer">所有内容 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>2</h3>
                            <p>昨日新增产品</p>
                        </div>
                        <div class="icon">
                        <i class="ion iconfont">&#xe63f;</i>
                        </div>
                        <a href="/Content/index/audit/0" class="small-box-footer">所有内容 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>3</h3>
                            <p>昨日新增订单</p>
                        </div>
                        <div class="icon">
                        <i class="ion iconfont">&#xe60b;</i>
                        </div>
                        <a href="/Order/index.html" class="small-box-footer">所有内容 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>4</h3>
                            <p>昨日新增用户</p>
                        </div>
                        <div class="icon">
                        <i class="ion iconfont">&#xe644;</i>
                        </div>
                        <a href="/User/index.html" class="small-box-footer">所有内容 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div> 
            </div><!-- /.row --> 
            <div class="row">
            <!-- Left col -->
                <section class="col-lg-7 connectedSortable"> 
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <!-- <li><a href="#content-my" data-toggle="tab">我的内容</a></li> -->
                            <li class="active"><a href="#content-hot" data-toggle="tab">最新商品</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i>商品内容</li>
                        </ul>
                        <div class="tab-content no-padding"> 
                            <div class="chart tab-pane " id="content-my" style="position: relative; height: 312px;"> 
                                
                            </div>
                            <div class="chart tab-pane active" id="content-new" style="position: relative; height: 312px;">
                                <table class="table table-hover table-striped contentList">
                                    <thead>
                                    <tr>
                                        <th class='maxtable'>标题</th>  
                                        <th width='95' class='th-oper'>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody style="overflow-y:scoll;">

                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <!-- <li><a href="#product-new" data-toggle="tab">最新产品</a></li> -->
                            <li class="active"><a href="#product-hot" data-toggle="tab">最新资讯</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i>资讯管理</li>
                        </ul>
                        <div class="tab-content no-padding"> 
                            <!-- <div class="chart tab-pane " id="product-my" style="position: relative; height: 312px;"> </div> -->
                            <div class="chart tab-pane" id="product-new" style="position: relative; height: 312px;"> </div>
                            <div class="chart tab-pane active" id="product-hot" style="position: relative; height: 327px;"> 
                            
                                <table class="table table-hover table-striped contentList">
                                    <thead>
                                    <tr>
                                        <th class='maxtable'>标题</th>  
                                                <th width='95' class='th-oper'>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody style="overflow-y:scoll;">

                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </section><!-- /.Left col --> 
                <section class="col-lg-5 connectedSortable">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <!-- <li><a href="#topics-my" data-toggle="tab">我的专题</a></li> -->
                            <li class="active"><a href="#topics-new" data-toggle="tab">最新订单</a></li>
                            <!-- <li ><a href="#topics-hot" data-toggle="tab">热门专题</a></li> -->
                            <li class="pull-left header"><i class="fa fa-inbox"></i>订单管理</li>
                        </ul>
                        <div class="tab-content no-padding"> 
                            <!-- <div class="chart tab-pane " id="topics-my" style="position: relative; height: 312px;"> </div> -->
                            <div class="chart tab-pane active" id="topics-new" style="position: relative; height: 312px;"> 
                                <table class="table table-hover table-striped contentList">
                                <thead>
                                <tr>
                                    <th class='maxtable'>标题</th>  
                                    <th width='95' class='th-oper'>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table> 
                            
                            </div>
                        </div>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right"> 
                            <li class="pull-left header"><i class="fa fa-inbox"></i>经销商</li>
                        </ul>
                        <div class="tab-content no-padding">  
                            <div class="chart tab-pane active" id="content-hot" style="position: relative; height: 312px;overflow:auto;"> 
                                <table class="table table-hover table-striped contentList">
                                    <thead>
                                    <tr>
                                        <th class='maxtable'>用户</th>  
                                        <th width='maxtable' class='th-oper'>状态</th>
                                    </tr>
                                    </thead>
                                    <tbody style="overflow-y:scoll;">
            

                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </section><!-- right col -->
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
    </div> 
  </body>
</html>
