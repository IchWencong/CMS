<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{$web_desc}">
    <meta name="keywords" content="{$web_keywords}">
    <title>{$web_title}</title>
    <fireup style="display:none;">{$cat}</fireup>
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/basic.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/index.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/sidebar.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/articlelist.css" />
</head>
<body>
{include file="header.tpl"}
<div class="main">
    <div class="article-list">
        {foreach $allArticleInfo $article}
        <div class="item">
            <h2><a href="{makeUrl('Index', 'article')}/id/{$article['a_id']}">{$article['a_title']}</a></h2>
            <p>
                <span class="copy-from">来源:{$article['a_copy_from']}</span>
                <span class="count">阅读({$article['a_count']})</span>
                <span class="create-time">时间:{$article['a_create_time']}</span>
            </p>
        </div>
        {/foreach}
        <div class="page">{$show}</div>
    </div>
    {include file="sidebar.tpl"}
</div>
</body>
<script type="text/javascript" src="{getRootDir()}/public/js/jquery3.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/front/js/nav.js"></script>
</html>
