<?php
namespace admin\controller;
use core\lib\Controller;

class IndexController extends Controller
{
	public function index()
	{
        $this->login();
	}
    public function login()
    {
        $this->smarty->display('login.tpl');
    }
}
