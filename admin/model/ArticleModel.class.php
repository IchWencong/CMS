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

    /**
     * 获取所有的文章信息
     */
    public function getAllArticleInfo()
    {
        return $this->select('article(a)',
            ['[>]menu(m)' => 
                [
                    'a_id' => 'm.menu_id'
                ]
            ],
            [
                'a.a_id',
                'a.a_title',
                'a.a_status',
                'a.a_copy_from',
                'a.a_create_time',
                'a.a_count',
                'b.menu_name'
            ]
        ); 
    }
}
