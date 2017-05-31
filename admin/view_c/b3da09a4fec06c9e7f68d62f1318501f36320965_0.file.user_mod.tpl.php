<?php
/* Smarty version 3.1.30, created on 2017-05-31 15:13:54
  from "/var/www/html/admin/view/user_mod.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e6d32932c30_70673940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3da09a4fec06c9e7f68d62f1318501f36320965' => 
    array (
      0 => '/var/www/html/admin/view/user_mod.tpl',
      1 => 1496213305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592e6d32932c30_70673940 (Smarty_Internal_Template $_smarty_tpl) {
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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('User','index');?>
">用户管理</a>
            </li>
            <li class="active">修改用户</li>
        </ol>
    </div>
    <form id="fireupmod">
        <div class="form-group">
            <label for="username">用户名: </label>
            <input type="text" name="username" class="form-control" id="username" readonly value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
">
            <label for="realname">真实姓名: <span> (*不大于20个字符,不填则为fireup)</span></label>
            <input type="text" name="realname" class="form-control" id="realname" placeholder="请填写真实姓名" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['realname'];?>
">
            <label for="password">密码: <span> (*留空则不修改)</span></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="请填写密码">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupmod-btn">修改</button>
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
">
    </form>
</body>
<?php echo '<script'; ?>
>
var FIREUP={
   modurl : '<?php echo makeUrl("User","modUser");?>
',  
   jumpurl : '<?php echo makeUrl("User","index");?>
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
