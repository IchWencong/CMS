<?php
namespace admin\controller;
use core\lib\Controller;
use admin\model\PublicModel;

class BasicController extends Controller
{
    private $pmodel = null;
    
    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->pmodel = new PublicModel();
    }

    /**
     * 主方法
     */
    public function index()
    {
        //获取网站配置信息
        $info = $this->pmodel->select('basic', '*');

        //将变量传递给模板
        $this->smarty->assign('info', $info[0]);


        $this->smarty->display('web_settings.tpl');
    }
}

