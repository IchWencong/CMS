<?php
namespace admin\model;
use core\lib\Model;

class AdminModel extends Model
{
    /**
     * 根据用户名获取数据
     * @param string $username
     * @return bool
     */
    public function getAdminByUsername($username)
    {
        $ret = $this->select('user', 'id', ['username' => $username]);
        return $ret ? true : false;
    }
    
    /**
     * 当用户名存在时判断密码是否正确
     * @param string $username 用户名
     * @param string $password 密码
     * @return bool
     */
    public function checkLoginPassword($username, $password)
    {
        $ret = $this->select('user', 'id', [
            'AND' => [
                        'username' => $username, 
                        'password' => $password
                     ]
            ]);
        return $ret ? true : false;
    }
    
    /**
     * 登录之后修改最后登录时间
     * @param string $username 用户名
     * @return null
     */
    public function updateLoginTime($username)
    {
        $this->update('user', ['#last_login_time' => 'NOW()'], ['username' => $username]);
    }

    /**
     * 获取指定用户最后的登录时间
     * @param string $username 用户名
     * @return string 处理后的日期字符串
     */
    public function getLastLoginTime($username)
    {
        $info         = $this->select('user', 'last_login_time',['username' => $username]);
        $dealed_time  = substr($info[0], 0,10);
        return $dealed_time;
    }
}
