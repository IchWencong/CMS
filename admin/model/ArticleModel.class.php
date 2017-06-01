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
    public function getAllArticleInfo($where = [])
    {
        return $this->select('article(a)',
            ['[>]menu(m)' => 
                [
                    'a.a_catid' => 'menu_id'
                ]
            ],
            [
                'a.a_id(a_id)',
                'a.a_title(a_title)',
                'a.a_status(a_status)',
                'a.a_copy_from(a_copy_from)',
                'a.a_create_time(a_create_time)',
                'a.a_count(a_count)',
                'm.menu_name'
            ],
            $where
        ); 
    }

    /**
     * @param string $id 文章id
     * @return bool
     */
    public function delArticle($id)
    {
        return $this->delete('article', ['a_id' => $id]) ? true : false;
    }

    /**
     * 根据文章标题名或者文章id获取一篇文章
     * @param mixed $article 文章标题或者文章id
     * @return array 包含文章信息的数组
     */
    public function getOneArticle($article)
    {
        return $this->select('article', '*', [
            'OR'   =>   [
                'a_id'    =>  $article,
                'a_title'  => $article,
            ],
            'LIMIT' =>  1,
        ])[0];
    }
}
