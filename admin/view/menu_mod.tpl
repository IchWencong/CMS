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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Menu', 'index')}">菜单管理</a>
            </li>
            <li class="active">修改菜单</li>
        </ol>
    </div>
    <form id="fireupmod">
        <div class="form-group">
            <label for="nav_name">菜单名称: </label>
            <input type="text" name="menu_name" class="form-control" id="nav_name" readonly value="{$menuInfo['menu_name']}" placeholder="请填写菜单名称">
            <label>父菜单: </label>
            <select name="menu_pid" class="form-control">
                <option value="0">没有父菜单</option>
                {foreach $allMenuInfo as $menu}
                <option value="{$menu['menu_id']}">{$menu['menu_name']}</option>
                {/foreach}
            </select>
            <br />
            <label>状态:</label>
            <div class="form-control">
                <input type="radio" name="menu_status" value="1" {if $menuInfo['menu_status'] == 1}checked{/if}> 开启
                <input type="radio" name="menu_status" value="0" {if $menuInfo['menu_status'] == 0}checked{/if}> 关闭
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupmod-btn">修改</button>
        </div>
        <input type="hidden" name="menu_id" value="{$menuInfo['menu_id']}">
    </form>
</body>
<script>
var FIREUP={
   modurl : '{makeUrl("Menu", "modMenu")}',  
   jumpurl : '{makeUrl("Menu", "index")}',  
};
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
</html>
