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
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/article.css" />
</head>
<body>
{include file="header.tpl"}
<div class="main">
    <div class="article-info">
        <h2>{$articleInfo['a_title']}</h2>
        <div class="cont">
            {$articleInfo['a_cont']}
        </div>
        <div class="comment">
            <h2>评论:</h2>
            <div class="item">
                <p><b>薛文聪 说:</b></p>
                <div class="item-cont">
                    这是一些测试文字
                    这是一些测试文字
                    这是一些测试文字
                    这是一些测试文字
                </div>
                <div class="time">
                    发表于2017-09-09 00:00:00
                </div>
            </div>
            <form id="fireupadd">
                <p>
                    <label>昵称 : </label>
                    <input type="text" name="c_nickname" id="c_nickname" class="c_nickname">
                </p>
                <p>
                    <label>内容 : </label>
                    <textarea name="c_cont" id="c_cont" class="c_cont" row="5" col="50"></textarea>
                </p>
            </form>
        </div>
    </div>
    {include file="sidebar.tpl"}
</div>
</body>
<script type="text/javascript" src="{getRootDir()}/public/js/jquery3.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/front/js/nav.js"></script>
</html>
