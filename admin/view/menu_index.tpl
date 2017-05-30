<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/menu_index.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Menu', 'index')}">菜单管理</a>
            </li>
            <li class="active">菜单列表</li>
        </ol>
        <a href="{makeUrl('Menu', 'addMenu')}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
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
                {foreach $allMenuInfo as $menu}
                <tr>
                    <td><input type="text" name="listorder[{$menu['menu_id']}]" value="{$menu['menu_order']}"></td>
                    <td>{$menu['menu_id']}</td>
                    <td>{$menu['menu_name']}</td>
                    <td>{if $menu['menu_status']==1}正常{else}关闭{/if}</td>
                    <td>
                        <a href="javascript:void(0)" class="fireup-mod" attr-id="{$menu['menu_id']}"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="javascript:void(0)" class="fireup-del" attr-id="{$menu['menu_id']}"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                {/foreach}
                <tr><td colspan="5">{$show}</tr>
                </form>
            </tbody>
        </table>
    </div>
    <button type="button" id="fireup-listorder" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>更新排序</button>
</body>   
<script>
    var FIREUP = {
        listorder_url : '{makeUrl("Menu", "orderMenu")}',
        delurl        : '{makeUrl("Menu", "delMenu")}',
        modurl        : '{makeUrl("Menu", "modMenu")}',
    }
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
</html>
