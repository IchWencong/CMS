<?php
namespace admin\controller;
use core\lib\Controller;

class MenuController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }    

    public function index()
    {
        $this->smarty->display('menu_index.tpl');
    }
}
