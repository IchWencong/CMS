/**
 * 前台登录业务处理
 */
var login = {
    check : function(){
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        if (username == '') {
            dialog.error('用户名不得为空');
            return false;
        }
        
        if (username.length < 2 || username.length > 20) {
            dialog.error('用户名必须在2-20位之间');
            return false;
        }
    
        if (password == '') {
            dialog.error('密码不得为空');
            return false;
        }
 
        //ajax验证
        var data = {'username' : username, 'password' : password};
        var url  = window.location.origin + '/admin.php/Index/loginCheck'; 
        $.post(url, data, function(result){
            if (result.status == 0) {
                return dialog.error(result.message);
            }

            if (result.status == 1) {
               return  dialog.success(result.message, window.location.origin + '/admin.php/Index/index');
            }
        },'JSON');
    }
}

/**
 * 当在密码框中按下回车键的时候,触发登录按钮的回车事件
 */
$('#password').keydown(function(e){
    if(e.keyCode==13){
         $('input[type=button]').click(); //处理事件
    }
});
