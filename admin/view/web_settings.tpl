<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{getRootDir()}/public/css/bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{getRootDir()}/public/css/web_settings.css">
    <script src="{getRootDir()}/public/js/jquery3.js"></script>
    <script src="{getRootDir()}/public/js/layer/layer/layer.js"></script>
    <script src="{getRootDir()}/public/js/dialog.js"></script>
    <script src="{getRootDir()}/public/js/web_settings.js"></script>
</head>
<body>
    <form>
        <div class="form-group">
            <label for="web_title">站点标题: <span> (*不大于12个字符)</span></label>
            <input type="text" name="title" value="{$info.web_title}" class="form-control" id="web_title" placeholder="请填写站点标题">
            <label for="web_keywords">站点关键词: <span>(*不大于30个字符)</span></label>
            <input type="text" class="form-control" value="{$info.web_keywords}" name="keywords" id="web_keywords" placeholder="请填写站点关键词">
            <label for="web_desc">站点描述: <span>(*不大于50个字符)</span></label>
            <textarea class="form-control" rows="3" name="description" id="web_desc">{$info.web_desc}</textarea>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary fireup">提交</button>
        </div>
    </form>
</body>
</html>

