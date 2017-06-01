<?php
namespace admin\controller;
use admin\controller\CommonController;
use admin\model\ArticleModel;
use admin\model\PublicModel;
use admin\model\MenuModel;
use core\lib\Page;

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
        $count  = $this->amodel->count('article');
        $page   = new Page($count, 5);
        $show   = $page->show();
        $where  = [
            'LIMIT' => [
                $page->firstRow,
                $page->listRows
            ],
        ];
        //p($count);
        $this->smarty->assign('allArticleInfo', $this->amodel->getAllArticleInfo($where));
        $this->smarty->assign('show', $show);
        $this->smarty->display('article_index.tpl');
    }
    
    public function addArticle()
    {
        if ($_POST){
            $this->check();
            $insertData = $this->dealData();
            if ($this->pmodel->ins('article', $insertData, [])) {
                show(1, '文章发布成功');
            } else {
                show(0, '文章发布失败');
            }
        }
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo());
        $this->smarty->display('article_add.tpl');
    }

    /**
     * 删除文章
     */
    public function delArticle()
    {
        if ($_POST){
            $id = $_POST['id'];
            $jumpurl = $_SERVER['REFERER'];
            if ($this->amodel->delArticle($id)) {
                show(1, '删除成功', ['jumpurl' => $jumpurl]);
            }
            show(0, '删除失败');
        }
        show(0, '非法访问');
    }

    /**
     * 编辑文章
     */
    public function modArticle()
    {
        if ($_POST){
            $this->check();
            $a_id     = $_POST['a_id'];
            unset($_POST['a_id']);
            $ret = $this->pmodel->mod('article', $_POST, ['a_id' => $a_id]);
            show($ret ? 1 : 0, $ret ? '修改成功' : '没有修改任何信息');
        }


        $id = $_GET['id'];
        if (!$id) {
             show(0, '非法访问');
        }
        
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo());
        $this->smarty->assign('articleInfo', $this->amodel->getOneArticle($id));
        $this->smarty->display('article_mod.tpl');
    }
    /**
     * 检查post过来的数据
     */
    private function check()
    {
        if (trim($_POST['a_title']) == '') {
            show(0, '文章标题不得为空');
        }

        if (trim($_POST['a_cont']) == ''){
            show(0, '文章内容不得为空');
        }

        if (checkLength(trim($_POST['a_title']), 50, 'morethan')){
            show(0, '文章标题不得大于50位');
        }        
    }

    /**
     * 格式化post过来的数据
     */
    private function dealData()
    {
        $insertData = [];
        $insertData['a_title']        = trim($_POST['a_title']);
        $insertData['a_catid']        = $_POST['a_catid'];
        $insertData['a_copy_from']    = $_POST['a_copy_from'];
        $insertData['#a_create_time'] = 'NOW()';
        $insertData['a_cont']         = $_POST['a_cont'];

        return $insertData;
    }
}
