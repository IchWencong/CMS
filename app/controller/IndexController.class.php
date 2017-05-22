<?php
namespace app\controller;
use core\lib\Controller;

class IndexController extends Controller
{
	public function index()
	{
		echo '<p style="font-size:20px;color:#666;">欢迎使用frame框架^_^</p>';
        $this->smarty->display('index.tpl');
	}
}
