<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function _outPut($code, $msg = '', $data = array()) {
    $ret = array();
    $ret['code'] = $code;
    $ret['msg'] = $msg;
    $ret['data'] = $data;
    echo json_encode($ret);
    exit();
}
function get_domain() {
    $host = $_SERVER['HTTP_HOST'];
    $host = strtolower($host);
    if (strpos($host, '/') !== false) {
        $parse = @parse_url($host);
        $host = $parse['host'];
    }
    $topleveldomaindb = array('com', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'xxx', 'idv', 'mobi', 'cc', 'me');
    $str = '';
    foreach ($topleveldomaindb as $v) {
        $str .= ($str ? '|' : '') . $v;
    }
    $matchstr = "[^\.]+\.(?:(" . $str . ")|\w{2}|((" . $str . ")\.\w{2}))$";
    if (preg_match("/" . $matchstr . "/ies", $host, $matchs)) {
        $domain = $matchs['0'];
    } else {
        $domain = $host;
    }
    return $domain;
}
//返回信息
function re($status = 1, $info = "", $url = null) {
    return array("status" => $status, "info" => $info, "url" => $url);
}