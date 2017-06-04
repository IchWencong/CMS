<?php
namespace admin\controller;
use core\lib\Controller;
use core\lib\Upload;

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

    /**
     * 图片上传
     */
    public function upload()
    {
        $upload = new Upload();
        $upload->savePath = FRAME . '/upload';
        
        $info   = $upload->upload();

        if ($info){
            exit(getRootDir() . '/upload/' . $info[0]);
        } else {
            exit('上传失败');
        }
    }
}
