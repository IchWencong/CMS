<?php
/* Smarty version 3.1.30, created on 2017-05-31 15:54:15
  from "/var/www/html/admin/view/article_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e76a7bf4c84_22820032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de37460d97a17ca0e6ce9510a1e37ca28678ad55' => 
    array (
      0 => '/var/www/html/admin/view/article_add.tpl',
      1 => 1496217253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592e76a7bf4c84_22820032 (Smarty_Internal_Template $_smarty_tpl) {
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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('Article','index');?>
">文章管理</a>
            </li>
            <li class="active">添加文章</li>
        </ol>
    </div>
    <form id="fireupadd">
        <div class="form-group">
            <label for="a_title">文章标题: <span> (*不大于50个字符)</span></label>
            <input type="text" name="username" class="form-control" id="username" placeholder="请填写用户名">
            <label for="realname">类别: </label>
            <select name="a_catid" class="form-control">
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
            <label>来源: </label>
            <select name="a_copy_from" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, @constant('COPY_FROM'), 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
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
