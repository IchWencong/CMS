<?php
namespace admin\controller;
use admin\controller\CommonController;
use admin\model\UserModel;
use admin\model\PublicModel;
use core\lib\Page;

class UserController extends CommonController
{
    private $umodel = null;
    private $pmodel = null;

    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->umodel = new UserModel();
        $this->pmodel = new PublicModel();
    }
    
    public function index()
    {
        $count  = $this->umodel->count('user');
        $page   = new Page($count, 5);
        $show   = $page->show();
        $where  = [
            'LIMIT' => [
                $page->firstRow,
                $page->listRows
            ],
        ];
        $this->smarty->assign('allUserInfo', $this->umodel->getAllUserInfo($where));
        $this->smarty->assign('show', $show);
        $this->smarty->display('user_index.tpl');
    }
    
    /**
     * 添加用户
     */
    public function addUser()
    {
        //判断是否有数据发送
        if ($_POST) {
            $this->check(true);
            $username = trim($_POST['username']);
            $realname = trim($_POST['realname']);
            $password = trim($_POST['password']);
            if ($this->umodel->addUser($username, $realname, sha1($password))) {
                return show(1, '添加成功');
            }
            return show(0, '添加失败');
        }
        
        $this->smarty->display('user_add.tpl');
        
    }

    /**
     * 删除用户
     */
    public function delUser()
    {
        if ($_POST){
            $id = $_POST['id'];
    
            //先看看要删除的用户是否存在
            if (!$this->umodel->userExists($id)) {
                show(0, '你要删除的用户不存在'); 
            }
            if ($this->umodel->getOneUser($id)['username'] == 'admin') {
                show(0, '不能删除超级用户');
            }
            $ret  =  $this->umodel->delUser($id);
            show($ret ? 1 : 0, '删除'.($ret ? '成功' : '失败'));
        }
        show(0, '非法访问');
    }

    /**
     * 修改用户信息
     */
    public function modUser()
    {
        if ($_POST){
            $this->check();
            //如果密码为空则代表不修改
            if (empty($_POST['password'])){
                unset($_POST['password']);
            }
            //把id取出来当做条件,然后再把它删除掉
            $id = $_POST['id'];
            unset($_POST['id']);
            $ret = $this->pmodel->mod('user', $_POST, ['id' => $id]);
            show($ret ? 1 : 0, $ret ? '修改成功' : '没有修改任何信息');
        }


        $id = $_GET['id'];
        if (!$id) {
             show(0, '非法访问');
        }
        
        if (!$this->umodel->userExists($id)) {
            show(0, '该用户不存在');
        }
        $this->smarty->assign('userInfo', $this->umodel->getOneUser($id));
        $this->smarty->display('user_mod.tpl');
    }

    /**
     * 对post过来的数据进行验证
     * @param bool $isAdd 是否是添加的时候验证
     * @return void
     */
    public function check($isAdd = false)
    {
            $username = $_POST['username'] = trim($_POST['username']);
            $realname = $_POST['realname'] = trim($_POST['realname']);
            $password = $_POST['password'] = trim($_POST['password']);
            
            if (!$username) {
                return show(0, '用户名不能为空');
            }

            if (!$realname) {
                $realname = 'fireup';
            }
            if (checkLength($username, 20, 'morethan')) {
                return show(0, '用户名不得大于20位');
            }

            if (checkLength($realname, 20, 'morethan')) {
                return show(0, '姓名不得大于20位');
            }
           
            if ($isAdd){
                if (!$password) {
                    return show(0, '密码不得为空');
                }
            } 
            
            if ($isAdd) {
                 if ($this->umodel->userExists($username)) {
                    return show(0, '该用户名称已经被占用');
                }
            }
    
    }
}
