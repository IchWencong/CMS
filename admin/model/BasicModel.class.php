<?php
namespace admin\model;
use core\lib\Model;

class BasicModel extends Model
{
    /**
     * 获取网站配置信息
     * @return array
     */
    public function getInfo()
    {
        return $this->select('basic', '*');
    }


    /**
     * 修改网站配置信息
     * @param string $web_title 网站标题
     * @param string $web_keywords 网站关键字
     * @param string $web_desc 网站描述
     * @return bool
     */
    public function modInfo($web_title, $web_keywords, $web_desc)
    {
        $ret = $this->update('basic',[
            'web_title'    =>    $web_title,
            'web_keywords' =>    $web_keywords,
            'web_desc'     =>    $web_desc,
        ]);

        return $ret   ?  true : false;
    }

    /**
     * 更新今日登录人数
     */
    public function updateTodayLogin()
    {
       $this->update('basic',['web_today_login[+]' => 1]);
    }
}

