<?php
namespace admin\controller;
use admin\controller\CommonController;
use admin\model\BasicModel;

class BasicController extends CommonController
{
    private $bmodel = null;
    
    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->bmodel = new BasicModel();
    }

    /**
     * 主方法
     */
    public function index()
    {
        //获取网站配置信息
        $info = $this->bmodel->getInfo();

        //将变量传递给模板
        $this->smarty->assign('info', $info[0]);


        $this->smarty->display('web_settings.tpl');
    }

    /**
     * ajax验证后台代码
     * 同时,如果验证通过,就修改数据库信息
     * @return string json
     */
    public function check(){
        $web_title    =  trim($_POST['web_title']);
        $web_keywords =  trim($_POST['web_keywords']);
        $web_desc     =  trim($_POST['web_desc']);

        if (checkLength($web_title, 12, 'morethan')) {
            return show(0, '站点标题不得大于12位');
        }

        if (checkLength($web_keywords, 30, 'morethan')){
            return show(0, '站点关键字不得大于30位');
        }

        if (checkLength($web_desc, 50, 'morethan')) {
            return show(0, '站点描述不得大于50位');
        }
        
        if ($this->bmodel->modInfo($web_title, $web_keywords, $web_desc)) {
            return show(1, '网站信息更新成功');
        } else {
            return show(0, '没有修改任何信息');
        }
    }
}

