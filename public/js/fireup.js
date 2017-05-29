/**
 * 添加操作
 */
$('#fireupadd-btn').click(function(){
    var data      = $('#fireupadd').serializeArray();
    var postData  = {};

    $(data).each(function(){
        postData[this.name] = this.value;
    });
    console.log(postData);

    var url = FIREUP.addurl;
    var jumpurl = FIREUP.jumpurl;
    $.post(url, postData, function(result){
        if (result.status == 0) {
            dialog.error(result.message);
        }
        if (result.status == 1) {
            dialog.success(result.message,jumpurl);
        }
    }, 'JSON');
})

/**
 * 删除操作
 */
$('.fireup-del').click(function(){
    var id    = $(this).attr('attr-id');
    var url   = FIREUP.delurl;

    var data = {};
    data.id  = id;

    layer.open({
        type  : 0,
        title : '是否提交',
        btn   : ['是', '否'],
        icon  : 3,
        closeBtn : 2,
        content : '是否删除',
        scrollBar : true,
        yes : function(){
            //如果点击了确认按钮,则用ajax进行删除
            toDelete(url, data);
        },
        
    });    
});
function toDelete(url, data){
    $.post(url,
          data, 
          function(result){
                if (result.status == 0) {
                    dialog.error(result.message);
                 }
                if (result.status == 1) {
                     dialog.success(result.message, '');
                 }
           },
     'JSON');
}

/**
 *  编辑操作
 */
$('.fireup-mod').click(function(){
    var id = $(this).attr('attr-id');
    var data = {};
    var url = FIREUP.modurl;
    data.id = id;
    $.post(url, data, function(r){
         if (r.status == 0){
            dialog.error(r.message);
            return false;
         }
         window.location.href=url + '/id/' + id;
     }
    , 'JSON');
});
