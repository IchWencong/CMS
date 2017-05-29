<?php
namespace admin\model;
use core\lib\Model;

class MenuModel extends Model
{
    /**
     * 获取所有的前端导航
     * @return int 导航数
     */
    public function getMenuCount()
    {
        $num = $this->count('menu');
        return $num ?: 0;
    }

    /**
     * 获取所有的菜单信息
     * @return array 一个包含菜单信息的二维数组
     */
    public function getAllMenuInfo($where = [])
    {
        $info = $this->select('menu', '*', $where);
        return $info;
    }
    
    /**
     * 判断菜单是否已经存在
     * @param mixed $menu 菜单名或者菜单id
     * @return bool
     */    
    public function menuExists($menu)
    {
        $ret = $this->select('menu', 'menu_id',
                         ['OR'  => 
                               [
                                  'menu_name' => $menu,
                                  'menu_id'   => $menu,
                               ]
                         ]);
        return $ret ? true : false;
    }    

    /**
     * 添加菜单
     * @param string $menuName 菜单名
     * @param string $pId 父菜单id
     * @param string $status 菜单状态
     * @return int 新增id
     */
    public function addMenu($menuName, $pId, $status)
    {
       //获取将要添加的那列数据的自动增加的id值
       $order = $this->query("show table status like 'menu'")
                ->fetchAll()[0]['Auto_increment'];
       return $this->insert('menu',[
            'menu_name'    =>    $menuName,
            'menu_pid'     =>    $pId,
            'menu_status'  =>    $status,
            'menu_order'   =>    $order,
        ]); 
    }
    /**
     * 删除菜单
     * @param int $id 菜单id值
     * @return bool 是否删除成功
     */
    public function delMenu($id)
    {
        $rows  = $this->delete('menu', ['menu_id' => $id]);
        return $rows ? true : false;
    }
    
    /**
     * 根据菜单名或者菜单id获取单个菜单
     * @param mixed $menu 菜单名字或者菜单id
     * @return array 包含菜单信息的数组
     */
    public function getOneMenu($menu)
    {
        return $this->select('menu', '*', [
            'OR'   =>   [
                'menu_id'    => $menu,
                'menu_name'  => $menu,
            ],
            'LIMIT' =>  1,
        ])[0];
    }
}
