<?php
/* Smarty version 3.1.30, created on 2017-05-30 23:04:01
  from "/var/www/html/admin/view/user_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d89e1444547_41913361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e58d93dd2f4e89c222b97e017d32365de6d0ba97' => 
    array (
      0 => '/var/www/html/admin/view/user_add.tpl',
      1 => 1496156478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592d89e1444547_41913361 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="active">添加用户</li>
        </ol>
    </div>
    <form id="fireupadd">
        <div class="form-group">
            <label for="username">用户名: <span> (*不大于20个字符)</span></label>
            <input type="text" name="username" class="form-control" id="username" placeholder="请填写用户名">
            <label for="realname">真实姓名: <span> (*不大于20个字符,不填则为fireup)</span></label>
            <input type="text" name="realname" class="form-control" id="realname" placeholder="请填写真实姓名">
            <label for="password">密码: </label>
            <input type="password" name="password" class="form-control" id="password" placeholder="请填写密码">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupadd-btn">添加</button>
        </div>
    </form>
</body>
<?php echo '<script'; ?>
>
var FIREUP={
   addurl : '<?php echo makeUrl("User","addUser");?>
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
