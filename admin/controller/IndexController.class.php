<?php
namespace admin\controller;
use core\lib\Controller;
use admin\model\PublicModel;

class IndexController extends Controller
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

	public function index()
	{
        $this->login();
	}
    public function login()
    {
        $this->pmodel->select('user', '*');
        $this->smarty->display('login.tpl');
    }
}
