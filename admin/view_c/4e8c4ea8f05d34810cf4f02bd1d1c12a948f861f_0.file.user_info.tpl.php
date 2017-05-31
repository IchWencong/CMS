<?php
/* Smarty version 3.1.30, created on 2017-05-31 15:12:12
  from "/var/www/html/admin/view/user_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e6ccc8ea7e2_94994906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8c4ea8f05d34810cf4f02bd1d1c12a948f861f' => 
    array (
      0 => '/var/www/html/admin/view/user_info.tpl',
      1 => 1496214593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592e6ccc8ea7e2_94994906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/user_info.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('User','index');?>
">用户管理</a>
            </li>
            <li class="active">个人中心</li>
        </ol>
    </div>
    <div class="userinfo">
        <p><span>用户名：</span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</p>
        <p><span>真实姓名：</span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['realname'];?>
</p>
        <p><span>用户ID：</span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
</p>
        <p><span>角色：</span><?php if (isAdminLogin()) {?>超级管理员<?php } else { ?>普通管理员<?php }?></p>
    </div>
</body>
</html>
<?php }
}
