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
