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
 *  修改跳转操作
 *  这部分代码并不是处理修改页面的业务逻辑的
 *  而是对进入修改页面前所做的验证,如果验证通过就进入修改页面
 */
$('.fireup-mod').click(function(){
    var id = $(this).attr('attr-id');
    var data = {};
    var url = FIREUP.modurl;
    //var jumpurl = 
    data.id = id;
    $.get(url, data, function(r){
         if (r && r.status == 0){
            dialog.error(r.message);
            return false;
         }
     }
    , 'JSON');
    window.location.href=url + '/id/' + id;
});

/**
 * 修改操作
 * 点击修改按钮后的JS代码
 */
$('#fireupmod-btn').click(function(){
    var data = $('#fireupmod').serializeArray();
    var postData = {};
    $(data).each(function(){
        postData[this.name] = this.value;
    });
    var url = FIREUP.modurl;
    
    //获取上一页地址，发送给后端
    postData['jumpurl'] = document.referrer;

    $.post(url, postData, function(r){
        if (r.status == 0) {
            dialog.error(r.message);
        }
        if (r.status == 1) {
            dialog.success(r.message, r.data['jumpurl']);
        }
    }, 'JSON');
});

/**
 * 排序操作JS代码
 *
 */
$('#fireup-listorder').click(function(){
    var data = $('#fireup-order').serializeArray();
    var postData = {};
    $(data).each(function(){
        postData[this.name] = this.value;
    });
    var url = FIREUP.listorder_url;
    $.post(url, postData, function(r){
        if (r.status == 0) {
            dialog.error(r.message);
        }
        if (r.status == 1){
            dialog.success(r.message, r.data['jumpurl']);
        }
    },'JSON');
 });
