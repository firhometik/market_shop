$(function(){
    $.ajax({
        url:'/Index/querySubscribe',
        type:'POST',
        dataType:'JSON',
        success: function(e){
            if (e.status == 0) {
                setTimeout(function(){
                     var r=confirm("更多精彩，请关注菲林克斯公众账号");
                     if (r == true) {
                        window.open("https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MjM5NTE1NTg1OA==&#wechat_redirect");
                     }
                },3000);

            }
        }

    });
});