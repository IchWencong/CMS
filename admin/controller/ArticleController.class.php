<?php
namespace admin\controller;
use admin\controller\CommonController;
use admin\model\ArticleModel;
use admin\model\PublicModel;
use admin\model\MenuModel;

class ArticleController extends CommonController
{
    private $amodel = null;
    private $pmodel = null;
    private $mmodel = null;

    public function __construct()
    {
        parent::__construct();
        $this->amodel = new ArticleModel();
        $this->pmodel = new PublicModel();
        $this->mmodel = new MenuModel();
    }

    public function index()
    {
       $this->smarty->display('article_index.tpl');
    }
    
    public function addArticle()
    {
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo());
        $this->smarty->display('article_add.tpl');
    }
}
