/**
 * 设置网站信息的业务处理
 * 包括前端验证和ajax异步验证
 */
$(function(){
    
    $('.fireup').eq(0).click(function(){
        var web_title    = $('#web_title').val().trim();
        var web_keywords = $('#web_keywords').val().trim();
        var web_desc     = $('#web_desc').val().trim();
        if (web_title == '') {
            dialog.error('站点标题不得为空');
        }

        if (web_keywords == ''){
            dialog.error('站点关键字不能为空');
        }

        if (web_desc == '') {
            dialog.error('站点描述不能为空');
        }

        if (web_title.length > 12) {
            
        }
    });
});
