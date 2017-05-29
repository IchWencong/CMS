<?php
namespace admin\controller;
use core\lib\Controller;
use admin\model\PublicModel;
use admin\model\AdminModel;
use admin\model\BasicModel;
use admin\model\ArticleModel;
use admin\model\MenuModel;

class IndexController extends Controller
{
    private $pmodel = null;
    private $amodel = null;
    private $bmodel = null;
    private $articleModel = null;
    private $mmodel = null;
    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->pmodel = new PublicModel();
        $this->amodel = new AdminModel();
        $this->bmodel = new BasicModel();
        $this->articleModel = new ArticleModel();
        $this->mmodel = new MenuModel();
    }

    /**
     * 主方法
     */
	public function index()
	{
        if (!isLogin()) {
            $this->login();  
        } else {
          $this->smarty->display('index.tpl');
        }
	}

    /**
     * 用于加载登录页面
     */
    public function login()
    {
        if (isLogin()) {
            $this->index();
        }
        $this->smarty->display('login.tpl');
    }
    /**
     * 登录相关业务处理
     * @return string json字符串
     */
    public function loginCheck()
    {
        $username = trim($_POST['username']);
        $password = sha1(trim($_POST['password']));

        if (!$username) {
            return show(0, '用户名不得为空');
        }

        if (!$password) {
            return show(0, '密码不得为空');
        }

        if (!$this->amodel->getAdminByUsername($username)) {
            return show(0, '该用户名不存在');
        }

        if (!$this->amodel->checkLoginPassword($username, $password)) {
            return show(0, '密码错误');
        }

        //写入到cookie时注意它的作用域
        //让它对整个根域都有效
        setcookie('username', $username, time() + 3600 * 24, '/');

        //如果用户最后登录的日期是今天之前
        //更新basic表中的 'web_today_login(今日登录人数)'
        //这样能够保证同一个用户每天多次登录只记录一次
        $nowTime          = date('Y-m-d');
        $last_login_time  = $this->amodel->getLastLoginTime($username);
        if ($nowTime > $last_login_time) {
            $this->bmodel->updateTodayLogin();
        } 

        //更新用户最后登录时间
        $this->amodel->updateLoginTime($username);

        return show(1, '登录成功');
    }
    
    /**
     * 退出登录
     */
    public function logout()
    {
        setcookie('username', '', time()-3600, '/');
        header('location:'.makeUrl());
    }

    /**
     * 网站基本信息显示
     */
    public function info()
    {
        if (!isLogin()) {
            echo '<script>window.parent.location.href="'.makeUrl('Index','login').'"</script>';
        }
        $info = $this->bmodel->getInfo()[0];
        $this->smarty->assign('web_title', $info['web_title']);
        $this->smarty->assign('today_login', $info['web_today_login']);
 
        $this->smarty->assign('maxReading', $this->articleModel->getMaxReading() ?: 0);
        $this->smarty->assign('articleCount', $this->articleModel->getArticleCount());
        $this->smarty->assign('menuCount', $this->mmodel->getMenuCount());
        $this->smarty->display('index_info.tpl');
    }
}
