<?php
/**
 * Created by PhpStorm.
 * User: LiuYang
 * Date: 2017/3/9
 * Time: 19:37
 */

namespace app\api\behavior;

class Test
{
     public function run(&$params)  
    {    // 响应头设置 我们就是通过设置header来跨域的 这就主要代码了 定义行为只是为了前台每次请求都能走这段代码  
        header('Access-Control-Allow-Origin:*');       
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
		    exit; // finish preflight CORS requests here
		}
        header('Access-Control-Allow-Methods:GET,POST');    
        header('Access-Control-Allow-Headers:*');  
        header('Access-Control-Allow-Credentials:true');  
        header('Access-Control-Max-Age :86400');  
    }
}