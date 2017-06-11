<?php
/* Smarty version 3.1.30, created on 2017-06-05 20:34:25
  from "/var/www/html/admin/view/article_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59354fd13d6d65_80392981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de37460d97a17ca0e6ce9510a1e37ca28678ad55' => 
    array (
      0 => '/var/www/html/admin/view/article_add.tpl',
      1 => 1496665886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_59354fd13d6d65_80392981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/article_add.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/wangEditor/dist/css/wangEditor.css">
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
    <form id="fireupadd" class="form-horizontal">
        <div class="form-group">
            <label for="a_title" class="col-sm-2 control-label">文章标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="a_title" name="a_title" placeholder="请输入文章标题">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">类别 </label>
            <div class="col-sm-10">
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
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">来源 </label>
            <div class="col-sm-10">
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
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">文章内容</label>
            <div class="col-sm-10">
                <textarea name="a_cont" id="wang" style="height:400px;"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-default btn-primary" id="fireupadd-btn">添加</button>
            </div>
        </div>
    </form>
</body>
<?php echo '<script'; ?>
>
var FIREUP={
   addurl : '<?php echo makeUrl("Article","addArticle");?>
',  
   imgurl : '<?php echo makeUrl("Common","upload");?>
',  
   jumpurl : window.location.href,
};
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/fireup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/wangEditor/dist/js/wangEditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/wangConfig.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
