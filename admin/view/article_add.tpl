<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/menu_add.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Article', 'index')}">文章管理</a>
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
                {foreach $allMenuInfo as $menu}
                <option value="{$menu['menu_id']}">{$menu['menu_name']}</option>
                {/foreach}
            </select>
            <label>来源: </label>
            <select name="a_copy_from" class="form-control">
                {foreach $smarty.const.COPY_FROM as $val}
                <option value="{$val}">{$val}</option>
                {/foreach}
            </select>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupadd-btn">添加</button>
        </div>
    </form>
</body>
<script>
var FIREUP={
   addurl : '{makeUrl("User", "addUser")}',  
   jumpurl : '{makeUrl("User", "index")}',  
};
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
</html>
