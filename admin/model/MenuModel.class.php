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
        $num = $this->count('nav');
        return $num ?: 0;
    }
}
