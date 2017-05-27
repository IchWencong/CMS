<?php
namespace admin\model;
use core\lib\Model;

class ArticleModel extends Model
{
    /**
     * 获取文章最大阅读数
     * @return int 最大阅读数 
     */
    public function getMaxReading()
    {
        $info = $this->max('article', 'a_count', ['a_status' => 1]);
        return $info;
    }
    
    /**
     * 获取文章总数
     * @return int 文章数量
     */
    public function getArticleCount()
    {
        $num = $this->count('article');
        return $num;
    }
}
