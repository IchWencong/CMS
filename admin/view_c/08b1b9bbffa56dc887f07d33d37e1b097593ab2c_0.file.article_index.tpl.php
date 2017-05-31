<?php
/* Smarty version 3.1.30, created on 2017-05-31 22:00:37
  from "/var/www/html/admin/view/article_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ecc85b8a821_19000129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b1b9bbffa56dc887f07d33d37e1b097593ab2c' => 
    array (
      0 => '/var/www/html/admin/view/article_index.tpl',
      1 => 1496239234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592ecc85b8a821_19000129 (Smarty_Internal_Template $_smarty_tpl) {
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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('Article','index');?>
">文章管理</a>
            </li>
            <li class="active">文章列表</li>
        </ol>
        <a href="<?php echo makeUrl('Article','addArticle');?>
" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
    </div>
    <div>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <th>文章标题</th>
                <th>所属菜单</th>
                <th>来源</th>
                <th>发布时间</th>
                <th>阅读数</th>
                <th>状态</th>
                <th>操作</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArticleInfo']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['menu_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_copy_from'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_create_time'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_count'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_status'];?>
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

                <tr><td colspan="7"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</tr>
            </tbody>
        </table>
    </div>
</body>   
<?php echo '<script'; ?>
>
    var FIREUP = {
        modurl        : '<?php echo makeUrl("Article","modArticle");?>
',
        delurl        : '<?php echo makeUrl("Article","delArticle");?>
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
