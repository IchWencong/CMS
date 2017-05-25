<?php
/* Smarty version 3.1.30, created on 2017-05-25 11:36:04
  from "/var/www/html/admin/view/index_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59265124b7a1d3_74944514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53da2b6c84f22e2c8d9864e0f29291728556abf1' => 
    array (
      0 => '/var/www/html/admin/view/index_info.tpl',
      1 => 1495683362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_59265124b7a1d3_74944514 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="cont">
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">Panel heading without title</div>
             <div class="panel-body">
                 Panel content
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">Panel heading without title</div>
             <div class="panel-body">
                 Panel content
             </div>
        </div>
    </div>
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">Panel heading without title</div>
             <div class="panel-body">
                 Panel content
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">Panel heading without title</div>
             <div class="panel-body">
                 Panel content
             </div>
        </div>
    </div>
</div>    
</body>
</html>
<?php }
}
