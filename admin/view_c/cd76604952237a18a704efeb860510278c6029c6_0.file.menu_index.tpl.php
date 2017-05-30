<?php
/* Smarty version 3.1.30, created on 2017-05-30 20:49:10
  from "/var/www/html/admin/view/menu_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d6a46a44366_54598205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd76604952237a18a704efeb860510278c6029c6' => 
    array (
      0 => '/var/www/html/admin/view/menu_index.tpl',
      1 => 1496148363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592d6a46a44366_54598205 (Smarty_Internal_Template $_smarty_tpl) {
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
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <th>排序</th>
                <th>id</th>
                <th>菜单名字</th>
                <th>状态</th>
                <th>操作</th>
            </thead>
            <tbody>
                <form id="fireup-order">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allMenuInfo']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                <tr>
                    <td><input type="text" name="listorder[<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_order'];?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_name'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_status'] == 1) {?>正常<?php } else { ?>关闭<?php }?></td>
                    <td>
                        <a href="javascript:void(0)" class="fireup-mod" attr-id="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="javascript:void(0)" class="fireup-del" attr-id="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
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
    <button type="button" id="fireup-listorder" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>更新排序</button>
</body>   
<?php echo '<script'; ?>
>
    var FIREUP = {
        listorder_url : '<?php echo makeUrl("Menu","orderMenu");?>
',
        delurl        : '<?php echo makeUrl("Menu","delMenu");?>
',
        modurl        : '<?php echo makeUrl("Menu","modMenu");?>
',
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/fireup.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
