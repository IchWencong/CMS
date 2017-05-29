var dialog = {
    //成功弹出层
    success : function(msg, url){
        layer.open({
            content : msg,
            icon : 1,
            yes : function(){
                window.location.href = url;
            }
        });
    },

    //错误弹出层
    error : function(msg){
        layer.open({
            title : '错误信息',
            icon : 2,
            content : msg,
        });
    },
    
    // 确认并跳转弹出层
    confirm : function(message, url) {
        layer.open({
            content : message,
            icon:3,
            btn : ['是','否'],
            yes : function(){
                location.href=url;
            },
        });
    },

    //无需跳转到指定页面的确认弹出层
    toconfirm : function(message) {
        layer.open({
            content : message,
            icon:3,
            btn : ['确定'],
        });
    },
};
