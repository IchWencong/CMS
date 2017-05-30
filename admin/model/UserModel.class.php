<?php
namespace admin\model;
use core\lib\Model;

class UserModel extends Model
{

    /**
     * 获取所有的用户信息
     * @return array 一个包含用户信息的二维数组
     */
    public function getAllUserInfo($where = [])
    {
        $info = $this->select('user', '*', $where);
        return $info;
    }

    /**
     * 判断用户是否已经存在
     * @param mixed $user 用户名或者用户id
     * @return bool
     */    
    public function userExists($user)
    {
        $ret = $this->select('user', 'id',
                         ['OR'  => 
                               [
                                  'username' => $user,
                                  'id'       => $user,
                               ]
                         ]);
        return $ret ? true : false;
    }    
    /**
     * 添加用户
     * @param string $username 用户名
     * @param string $realname 真实名
     * @param string $password 密码
     * @return int 新增id
     */
    public function addUser($username, $realname, $password)
    {
       return $this->insert('user',[
            'username'        =>    $username,
            'password'        =>    $password,
            'realname'        =>    $realname,
            'last_login_time' =>    19960802,
        ]); 
    }

    /**
     * 删除用户
     * @param int $id 用户id值
     * @return bool 是否删除成功
     */
    public function delUser($id)
    {
        $rows  = $this->delete('user', ['id' => $id]);
        return $rows ? true : false;
    }

    /**
     * 根据用户名或者用户id获取单个用户信息
     * @param mixed $menu 用户名或者用户id
     * @return array 包含用户信息的数组
     */
    public function getOneUser($user)
    {
        return $this->select('user', '*', [
            'OR'   =>   [
                'id'        => $user,
                'username'  => $user,
            ],
            'LIMIT' =>  1,
        ])[0];
    }
}
