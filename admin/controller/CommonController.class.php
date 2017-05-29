<?php
namespace admin\controller;
use core\lib\Controller;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check();
    }

    private function check()
    {
        if (!isLogin()){
            echo '<script>window.parent.location.href="'.makeUrl('Index','login').'"</script>';
        }
    }
}
