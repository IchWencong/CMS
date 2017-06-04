<?php
namespace app\controller;
use core\lib\Controller;
use admin\model\MenuModel;
use admin\model\ArticleModel;
use core\lib\Page;

class IndexController extends Controller
{
    private $mmodel = null;
    private $amodel = null;
    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->mmodel = new MenuModel();
        $this->amodel = new ArticleModel();
    }

	public function index()
	{
        $this->smarty->assign('menus', $this->mmodel->getAllMenuInfo(['LIMIT' => 5, 'ORDER' => ['menu_order' => 'ASC']]));
        $this->smarty->assign('topArticles', $this->amodel->getTopArticles(4));
        $this->smarty->display('index.tpl');
	}

    public function articlelist()
    {
        //获取当前所在菜单
        $menu_id = $_GET['id'];
        $this->smarty->assign('cat', $this->mmodel->getOneMenu($menu_id)['menu_name']);

        //分页显示
        $count  = $this->amodel->count('article(a)',
             [
                '[>]menu(m)'   => ['a.a_catid' => 'menu_id']
             ],
             '*',
             [
                'AND'   =>  [
                    'a.a_status'   => 1,
                    'm.menu_id'    => $menu_id
                ]
             ]
        );
        $page   = new Page($count, 5);
        $show   = $page->show();
        $where  = [
            'LIMIT' => [
                $page->firstRow,
                $page->listRows
            ],
            'AND'   => [
                'a.a_status'   => 1,
                'm.menu_id'    => $menu_id
            ]
        ];

        $this->smarty->assign('allArticleInfo', $this->amodel->getAllArticleInfo($where));
        $this->smarty->assign('show', $show);
        //菜单数据和最热文章数据
        $this->smarty->assign('menus', $this->mmodel->getAllMenuInfo(['LIMIT' => 5, 'ORDER' => ['menu_order' => 'ASC']]));
        $this->smarty->assign('topArticles', $this->amodel->getTopArticles(4));
        $this->smarty->display('articlelist.tpl');
    }

    public function article()
    {
        //菜单数据和最热文章数据
        $this->smarty->assign('menus', $this->mmodel->getAllMenuInfo(['LIMIT' => 5, 'ORDER' => ['menu_order' => 'ASC']]));
        $this->smarty->assign('topArticles', $this->amodel->getTopArticles(4));

        //通过获取文章id来获取文章信息
        $id    =  $_GET['id'];
        $articleInfo = $this->amodel->getOneArticle($id);

        //更新阅读数
        $this->amodel->updateArticleCount($id);

        //菜单id
        $catid =  $articleInfo['a_catid'];

        //然后通过菜单id找到菜单名字并传递给模板
        $this->smarty->assign('cat', $this->mmodel->getOneMenu($catid)['menu_name']);

        $this->smarty->assign('articleInfo', $articleInfo);
        $this->smarty->display('article.tpl');
    }
}
