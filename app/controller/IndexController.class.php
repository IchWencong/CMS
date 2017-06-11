<?php
namespace app\controller;
use core\lib\Controller;
use admin\model\MenuModel;
use admin\model\ArticleModel;
use admin\model\BasicModel;
use admin\model\PublicModel;
use core\lib\Page;

class IndexController extends Controller
{
    private $mmodel = null;
    private $amodel = null;
    private $bmodel = null;
    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->mmodel = new MenuModel();
        $this->amodel = new ArticleModel();
        $this->bmodel = new BasicModel();
        $this->pmodel = new PublicModel();
    }

	public function index()
	{
        $this->someData();
        $allArticleInfo =  $this->amodel->getAllArticleInfo(['LIMIT' => 5]);
        $this->smarty->assign('allArticleInfo', $allArticleInfo);
        $this->smarty->display('index.tpl');
	}

    public function articlelist()
    {
        $this->someData();

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
        $this->smarty->display('articlelist.tpl');
    }

    public function article()
    {
        $this->someData();

        //通过获取文章id来获取文章信息
        $id    =  $_GET['id'];
        $articleInfo = $this->amodel->getOneArticle($id);

        !$articleInfo   && show(0 ,'非法访问');
    
        //更新阅读数
        $this->amodel->updateArticleCount($id);

        //菜单id
        $catid =  $articleInfo['a_catid'];

        //然后通过菜单id找到菜单名字并传递给模板
        $this->smarty->assign('cat', $this->mmodel->getOneMenu($catid)['menu_name']);

        //取出该文章的评论
        $this->smarty->assign('comments', $this->pmodel->select('_comment', '*', ['c_a_id' => $id]));

        $this->smarty->assign('articleInfo', $articleInfo);
        $this->smarty->display('article.tpl');
    }

    /**
     * 添加评论
     */
    public function addComment()
    {
        $this->checkComment(); 
    
        $insertData            = [];    //要写入数据库的数据

        $insertData['#c_time'] = 'NOW()';

        $insertData            = array_merge($insertData, $_POST);

        $ret   =  $this->pmodel->ins('_comment', $insertData, []);
        show($ret ? 1 : 0, '发表评论' . ($ret ? '成功' : '失败'));
    }

    /**
     * 对评论表单进行验证
     */
    private function checkComment()
    {
        $nickname = $_POST['c_nickname'] = trim($_POST['c_nickname']);
        $cont     = $_POST['c_cont']     = trim($_POST['c_cont']);
        if (!$nickname) {
            show(0, '昵称不得为空');
        }
        if (!$cont) {
            show(0, '评论内容不得为空');
        }
        if (checkLength($nickname, 20, 'morethan')) {
            show(0, '昵称不得大于20位');
        }
        if (checkLength($cont, 140, 'morethan')) {
            show(0, '评论内容不得大于20位');
        }
    }

    /**
     * 公共数据注入
     */
    private function someData()
    {
        //网站基本信息
        $this->smarty->assign('basic', $this->bmodel->getInfo()[0]);

        //菜单数据和最热文章数据
        $this->smarty->assign('menus', $this->mmodel->getAllMenuInfo(['LIMIT' => 5, 'ORDER' => ['menu_order' => 'ASC'], 'menu_status' => 1]));
        $this->smarty->assign('topArticles', $this->amodel->getTopArticles(4));
    }
}
