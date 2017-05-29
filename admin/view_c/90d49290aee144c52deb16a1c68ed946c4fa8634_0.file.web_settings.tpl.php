<?php
/* Smarty version 3.1.30, created on 2017-05-28 17:44:00
  from "/var/www/html/admin/view/web_settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592a9be018f191_62911958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d49290aee144c52deb16a1c68ed946c4fa8634' => 
    array (
      0 => '/var/www/html/admin/view/web_settings.tpl',
      1 => 1495960554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_592a9be018f191_62911958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/web_settings.css">
    <?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/web_settings.js"><?php echo '</script'; ?>
>
</head>
<body>
    <form>
        <div class="form-group">
            <label for="web_title">站点标题: <span> (*不大于12个字符)</span></label>
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['web_title'];?>
" class="form-control" id="web_title" placeholder="请填写站点标题">
            <label for="web_keywords">站点关键词: <span>(*不大于30个字符)</span></label>
            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['web_keywords'];?>
" name="keywords" id="web_keywords" placeholder="请填写站点关键词">
            <label for="web_desc">站点描述: <span>(*不大于50个字符)</span></label>
            <textarea class="form-control" rows="3" name="description" id="web_desc"><?php echo $_smarty_tpl->tpl_vars['info']->value['web_desc'];?>
</textarea>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary fireup">提交</button>
        </div>
    </form>
</body>
</html>

<?php }
}
