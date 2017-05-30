<?php
/* Smarty version 3.1.30, created on 2017-05-30 17:47:02
  from "/var/www/html/admin/view/menu_mod.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d3f96011a19_26136756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4056db2b216fb14e2fcbcd8be982c08b8256ef7e' => 
    array (
      0 => '/var/www/html/admin/view/menu_mod.tpl',
      1 => 1496135285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592d3f96011a19_26136756 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="active">修改菜单</li>
        </ol>
    </div>
    <form id="fireupmod">
        <div class="form-group">
            <label for="nav_name">菜单名称: </label>
            <input type="text" name="menu_name" class="form-control" id="nav_name" readonly value="<?php echo $_smarty_tpl->tpl_vars['menuInfo']->value['menu_name'];?>
" placeholder="请填写菜单名称">
            <label>父菜单: </label>
            <select name="menu_pid" class="form-control">
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
                <input type="radio" name="menu_status" value="1" <?php if ($_smarty_tpl->tpl_vars['menuInfo']->value['menu_status'] == 1) {?>checked<?php }?>> 开启
                <input type="radio" name="menu_status" value="0" <?php if ($_smarty_tpl->tpl_vars['menuInfo']->value['menu_status'] == 0) {?>checked<?php }?>> 关闭
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupmod-btn">修改</button>
        </div>
        <input type="hidden" name="menu_id" value="<?php echo $_smarty_tpl->tpl_vars['menuInfo']->value['menu_id'];?>
">
    </form>
</body>
<?php echo '<script'; ?>
>
var FIREUP={
   modurl : '<?php echo makeUrl("Menu","modMenu");?>
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
