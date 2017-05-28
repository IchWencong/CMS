<?php
/* Smarty version 3.1.30, created on 2017-05-28 12:47:08
  from "/var/www/html/admin/view/menu_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592a564c1797d4_02191329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd76604952237a18a704efeb860510278c6029c6' => 
    array (
      0 => '/var/www/html/admin/view/menu_index.tpl',
      1 => 1495946825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592a564c1797d4_02191329 (Smarty_Internal_Template $_smarty_tpl) {
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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="<?php echo makeUrl('Menu','index');?>
">菜单管理</a>
            </li>
            <li class="active">菜单列表</li>
        </ol>
        <a href="<?php echo makeUrl('Menu','addMenu');?>
" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
    </div>
    <div>
        <table class="table table-bordered table-hover text-center">
            <thead>
                <th>排序</th>
                <th>id</th>
                <th>菜单名字</th>
                <th>状态</th>
                <th>操作</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>   
</html>
<?php }
}
