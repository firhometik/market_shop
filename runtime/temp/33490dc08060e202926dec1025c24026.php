<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"G:\market_shop\public/../application/admin\view\login\index.html";i:1526721238;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>o2o平台管理中心</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/static/Admin/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/Admin/css/AdminLTE.min.css">
    <style>
      .yzm{padding-right: 140px;position: relative;}
      .yzm img{position: absolute;right:0;top:0;border:1px solid #d7d7d7;}
      .iconfont{font-size: 20px;}
    </style>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>菲林克斯</b>平台管理中心</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">请输入您的登录帐号和密码</p>
        <form action="<?php echo url('/login/setLogin'); ?>" method="post" id='login'>
          <input type="hidden" name='sfkey' value="" id='sfkey'> 
          <div class="form-group has-feedback">
            <input type="text" data-must="1"  class="form-control checkForm" name='user_name'  placeholder="您的登录帐号或手机号" value=''>
            <span class="help-block hide">
              <i class="iconfont">&#xe602;</i> 
              <span></span>
            </span>
            <span class="glyphicon glyphicon-envelope form-control-feedback">
              <i class="iconfont">&#xe66c;</i>
            </span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control checkForm" data-must='1' name='user_pass'  placeholder="您的登录密码"  value=''>
            <span class="help-block hide">
              <i class="iconfont">&#xe602;</i> 
              <span></span>
            </span>
            <span class="glyphicon glyphicon-lock form-control-feedback">
              <i class="iconfont">&#xe606;</i>
            </span>
          </div>
          <div class="form-group yzm has-feedback hide" id='yzm'>
            <input type="text" class="form-control" data-must='1' name='yzm'  placeholder="验证码">
            <span class="help-block hide">
              <i class="iconfont">&#xe602;</i> 
              <span></span>
            </span> 
            <img src="/Login/getVerify" alt="" onclick="this.src='/Login/getVerify?rnd=' + Math.random();"> 
          </div>
          <div class="form-group has-feedback hide has-error" id='tips'>
            <div class="help-block">
              <i class="iconfont"></i>
              <span></span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name='remember' value="1" > 记住登录状态
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat ss">登录</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div> 
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="/static/Admin/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/static/Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/Admin/js/jquery.form.js"></script>
    <script>
      $(function(){
        $("form").ajaxForm(function(e){ 
          var s = $.parseJSON(e);
          var code = s.code;
          $("form").data("lock",false);
          $("#yzm img").click();
          if(code!=200) //登陆失败
          {
            console.log('1');
            $("#tips").removeClass("hide")
                      .removeClass("has-success")
                      .addClass("has-error")
                      .find("i")
                      .text("")
                      .next("span")
                      .text(s.msg);
            if(e.url > 3)
            {
              $("#yzm").removeClass("hide");
              $("#yzm").find("input").addClass("checkForm");
            }
          }else
          {
            console.log(s.code);
            $("#tips").removeClass("hide")
                      .removeClass("has-error")
                      .addClass("has-success")
                      .find("i")
                      .text("")
                      .next("span")
                      .text("登录成功，正在跳转...");
            setTimeout(
              function(){
                window.location.href="/Index/index";
              },600
            )
          }
        });
      })
    </script>
  </body>
</html>
