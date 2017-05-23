<?php
/**
 * 函数库,主要是针对该系统
 * @author xwc
 */

function  show($status, $message,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($reuslt));
}

/**
 * 判断用户是否登录
 * @return bool
 */
function isLogin()
{
    return isset($_COOKIE['username]) ? true : false;
}
