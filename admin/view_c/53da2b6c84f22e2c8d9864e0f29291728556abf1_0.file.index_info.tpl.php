<?php
/* Smarty version 3.1.30, created on 2017-05-28 12:22:49
  from "/var/www/html/admin/view/index_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592a5099405ed4_76151890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53da2b6c84f22e2c8d9864e0f29291728556abf1' => 
    array (
      0 => '/var/www/html/admin/view/index_info.tpl',
      1 => 1495898149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592a5099405ed4_76151890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <title>fireupCMS</title>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/index_info.css">
</head>
<body>
<div class="header">
    <p><i>^_^</i>欢迎<span> <?php echo $_COOKIE['username'];?>
 </span>，感谢使用<?php echo $_smarty_tpl->tpl_vars['web_title']->value;?>
内容管理系统!</p>
</div>
<div class="desc"><i class="glyphicon glyphicon-leaf"></i> 网站整体指标:</div>
<div class="cont">
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-user"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">今日登录人数</p>
                    <p class="fireup-res"><?php echo $_smarty_tpl->tpl_vars['today_login']->value;?>
</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-comment"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">文章最大阅读数</p>
                    <p class="fireup-res"><?php echo $_smarty_tpl->tpl_vars['maxReading']->value;?>
</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-tags"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">文章总数</p>
                    <p class="fireup-res"><?php echo $_smarty_tpl->tpl_vars['articleCount']->value;?>
</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-th"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">前端导航数</p>
                    <p class="fireup-res"><?php echo $_smarty_tpl->tpl_vars['menuCount']->value;?>
</p>
                </div>
             </div>
        </div>
    </div>
</div>    
</body>
</html>
<?php }
}
