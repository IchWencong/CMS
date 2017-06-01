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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Article', 'index')}">文章管理</a>
            </li>
            <li class="active">文章列表</li>
        </ol>
        <a href="{makeUrl('Article', 'addArticle')}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
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
                {foreach $allArticleInfo as $article}
                <tr>
                    <td>{$article['a_title']}</td>
                    <td>{$article['menu_name']}</td>
                    <td>{$article['a_copy_from']}</td>
                    <td>{$article['a_create_time']}</td>
                    <td>{$article['a_count']}</td>
                    <td>{if $article['a_status'] == 1}正常{else}关闭{/if}</td>
                    <td>
                        <a href="javascript:void(0)" class="fireup-mod" attr-id="{$article['a_id']}"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="javascript:void(0)" class="fireup-del" attr-id="{$article['a_id']}"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                {/foreach}
                <tr><td colspan="7">{$show}</tr>
            </tbody>
        </table>
    </div>
</body>   
<script>
    var FIREUP = {
        modurl        : '{makeUrl("Article", "modArticle")}',
        delurl        : '{makeUrl("Article", "delArticle")}',
    }
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
