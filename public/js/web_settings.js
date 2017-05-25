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
           dialog.error('站点标题不得大于12位'); 
        }
        
        if (web_keywords.length > 30){
            dialog.error('站点关键字不得多于30位');
        }

        if (web_desc.length > 50){
            dialog.error('站点描述不得大于50位');
        }
    

        //ajax验证
        var url   = window.location.origin + '/admin.php/Basic/check';
        var data  = {'web_title' : web_title, 'web_keywords':web_keywords, 'web_desc':web_desc};

        $.post(url,data,function(result){
            
            if (result.status == 0) {
               dialog.error(result.message);
            }

            if (result.status == 1) {
                dialog.success(result.message, window.location.origin + '/admin.php/Basic/index');
            }
        }, 'JSON');     
    });
});
