<?php
/* Smarty version 3.1.30, created on 2017-05-22 11:43:42
  from "/var/www/html/admin/view/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59225e6e167c04_32146858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f029f0483812db0ae6ccbc1492cd298039440a' => 
    array (
      0 => '/var/www/html/admin/view/login.tpl',
      1 => 1495424587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59225e6e167c04_32146858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/login.css">
</head>
<body>
    <form method="post" action="<?php echo makeUrl('Login','index');?>
">
        <div class="form-group">
            <label for="username">用户名：</label>
            <input type="input" class="form-control" id="username" name="username" placeholder="请输入用户名">
            <label for="password">密码:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
            <input type="submit" class="btn-primary submit" value="登录">
        </div>
    </form>
</body>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/login.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
