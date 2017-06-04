<?php
/**
 * 函数库,主要是针对该系统
 * @author xwc
 */

/**
 * 格式化json
 * @param int $status 状态 取值为0或1，0代表失败，1代表成功
 * @param string $message 提示信息
 * @data array 要额外发送的数据
 * @return json 并且终止php脚本的执行
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
    return isset($_COOKIE['username']) ? true : false;
}

/**
 * 判断是否是超级用户登录
 * @return bool
 */
function isAdminLogin()
{
    return (isset($_COOKIE['username']) && $_COOKIE['username'] == 'admin') ? true : false;
}
/**
 * 判断数据长度是否合法
 * @param string $data
 * @param int    $length
 * @param string $flag   取值为lessthan或者morethan或者equals
 * @return bool
 */
function checkLength($data,$length,$flag)
{
    if ($flag == 'equals') {
        return mb_strlen($data,'utf-8') == $length ? true : false;
    } else if ($flag == 'lessthan') {
        return mb_strlen($data,'utf-8')  < $length ? true : false;
    } else if ($flag == 'morethan') {
        return mb_strlen($data,'utf-8')  > $length ? true : false;
    } else {
        p("check_length函数参数传递错误");
        return false;
    }
}
