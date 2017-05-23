$(function(){
    $('input[type=submit]').click(function(){
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
        
    });
});
