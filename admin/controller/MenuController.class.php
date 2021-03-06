<?php
namespace admin\controller;
use admin\controller\CommonController;
use admin\model\MenuModel;
use admin\model\PublicModel;
use core\lib\Page;

class MenuController extends CommonController
{
    private $mmodel = null;    
    private $pmodel = null;

    /**
     * 架构方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->mmodel = new MenuModel();
        $this->pmodel = new PublicModel();
    }    

    /**
     * 主方法,主要用于显示所有菜单
     * 进行分页处理
     */
    public function index()
    {
        $count  = $this->mmodel->count('menu');
        $page   = new Page($count, 5);
        $show   = $page->show();
        $where  = [
            'LIMIT' => [
                $page->firstRow,
                $page->listRows
            ],
            'ORDER' =>[
                'menu_order' => 'ASC',
            ],
        ];
        //p($count);
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo($where));
        $this->smarty->assign('show', $show);
        $this->smarty->display('menu_index.tpl');
    }
    
    /**
     * 添加菜单
     */
    public function addMenu()
    {
        //判断是否有数据发送
        if ($_POST) {
            $menuName = trim($_POST['menu_name']);
            $pId      = trim($_POST['p_id']);
            $status   = trim($_POST['status']);
            
            if (!$menuName) {
                return show(0, '菜单名不能为空');
            }
            if (checkLength($menuName, 6, 'morethan')) {
                return show(0, '菜单名不得大于6位');
            }
            
            // p($this->mmodel->query("show table status like 'menu'"));
            // p('<br/>');
            //p($this->mmodel->query('show table status like "menu"'));
            //查看菜单名称是否被占用
            if ($this->mmodel->menuExists($menuName)) {
                return show(0, '该菜单名称已经被占用');
            }

            if ($this->mmodel->addMenu($menuName, $pId, $status)) {
                return show(1, '添加成功');
            }
            return show(0, '添加失败');
        }
        
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo());
        $this->smarty->display('menu_add.tpl');
    }

    /**
     * 删除菜单
     */
    public function delMenu()
    {
        if ($_POST){
            $id = $_POST['id'];

            //先看看要删除的菜单是否存在
            if (!$this->mmodel->menuExists($id)) {
                show(0, '你要删除的菜单在数据库中不存在'); 
            }
            $ret  =  $this->mmodel->delMenu($id);
            show($ret ? 1 : 0, '删除'.($ret ? '成功' : '失败'));
        }
        show(0, '非法访问');
    }

    /**
     * 修改菜单
     */
    public function modMenu()
    {
        if ($_POST){
            $menu_id     = $_POST['menu_id'];
            unset($_POST['menu_id']);
            $jumpurl     = $_POST['jumpurl'];
            unset($_POST['jumpurl']);
            if (!$this->mmodel->menuExists($menu_id)) {
                show(0, '该菜单不存在');
            }
            $ret = $this->pmodel->mod('menu', $_POST, ['menu_id' => $menu_id]);
            show($ret ? 1 : 0, $ret ? '修改成功' : '没有修改任何信息', ['jumpurl' => $jumpurl]);
        }


        $id = $_GET['id'];
        if (!$id) {
             show(0, '非法访问');
        }
        
        if (!$this->mmodel->menuExists($id)) {
            show(0, '该菜单不存在');
        }
        $this->smarty->assign('allMenuInfo', $this->mmodel->getAllMenuInfo());
        $this->smarty->assign('menuInfo', $this->mmodel->getOneMenu($id));
        $this->smarty->display('menu_mod.tpl');
    }
    
    /**
     * 菜单排序
     */
    public function orderMenu()
    {
        $listorder = $_POST['listorder'];
        $errors    = [];
        try{
            foreach ($listorder as $id => $order) {
                $row = $this->mmodel->orderMenu($id, $order); 
                if ($row === false) {
                    $errors[] = $id;
                }
            }
        } catch (\Exception $e){
            show(0, $e->getMessage(), ['jumpurl' => JUMPURL]);
        }
        if (!empty($errors)) {
            show(0, '排序失败'.implode(',', $errors), ['jumpurl' => JUMPURL]);
        }
        show(1, '排序成功', ['jumpurl' => JUMPURL]);
    }
}
