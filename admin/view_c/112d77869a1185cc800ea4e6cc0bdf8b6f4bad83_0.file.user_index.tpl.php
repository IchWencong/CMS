<?php
/* Smarty version 3.1.30, created on 2017-05-31 17:00:05
  from "/var/www/html/admin/view/user_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e861512c7d7_59812894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112d77869a1185cc800ea4e6cc0bdf8b6f4bad83' => 
    array (
      0 => '/var/www/html/admin/view/user_index.tpl',
      1 => 1496216242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592e861512c7d7_59812894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/menu_index.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('User','index');?>
">用户管理</a>
            </li>
            <li class="active">用户列表</li>
        </ol>
        <a href="<?php echo makeUrl('User','addUser');?>
" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
    </div>
    <div>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <th>用户名</th>
                <th>真实姓名</th>
                <th>最后登录时间</th>
                <th>操作</th>
            </thead>
            <tbody>
                <form id="fireup-order">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUserInfo']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                    <td><a href="<?php echo makeUrl('User','userinfo');?>
/id/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['last_login_time'];?>
</td>
                    <td>
                        <a href="javascript:void(0)" class="fireup-mod" attr-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="javascript:void(0)" class="fireup-del" attr-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr><td colspan="5"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</tr>
                </form>
            </tbody>
        </table>
    </div>
</body>   
<?php echo '<script'; ?>
>
    var FIREUP = {
        modurl        : '<?php echo makeUrl("User","modUser");?>
',
        delurl        : '<?php echo makeUrl("User","delUser");?>
',
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/fireup.js"><?php echo '</script'; ?>
>
<?php }
}
