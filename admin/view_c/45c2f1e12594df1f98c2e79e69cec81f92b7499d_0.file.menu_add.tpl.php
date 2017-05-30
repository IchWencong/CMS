<?php
/* Smarty version 3.1.30, created on 2017-05-30 21:55:38
  from "/var/www/html/admin/view/menu_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d79da462dc6_53571938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c2f1e12594df1f98c2e79e69cec81f92b7499d' => 
    array (
      0 => '/var/www/html/admin/view/menu_add.tpl',
      1 => 1496152240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592d79da462dc6_53571938 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/menu_add.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('Menu','index');?>
">菜单管理</a>
            </li>
            <li class="active">添加菜单</li>
        </ol>
    </div>
    <form id="fireupadd">
        <div class="form-group">
            <label for="nav_name">菜单名称: <span> (*不大于6个字符)</span></label>
            <input type="text" name="menu_name" class="form-control" id="nav_name" placeholder="请填写菜单名称">
            <label>父菜单: </label>
            <select name="p_id" class="form-control">
                <option value="0">没有父菜单</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allMenuInfo']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
            <br />
            <label>状态:</label>
            <div class="form-control">
                <input type="radio" name="status"" value="1" checked> 开启
                <input type="radio" name="status"  value="0"> 关闭
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupadd-btn">添加</button>
        </div>
    </form>
</body>
<?php echo '<script'; ?>
>
var FIREUP={
   addurl : '<?php echo makeUrl("Menu","addMenu");?>
',  
   jumpurl : '<?php echo makeUrl("Menu","index");?>
',  
};
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/fireup.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
