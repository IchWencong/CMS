var fm = document.getElementsByTagName('form')[0];
window.addEventListener('load', function(){
    var subBtn = document.getElementsByClassName('submit')[0];
    subBtn.onclick = check;
});

/**
 * 表单验证
 */
function check(){
    if (fm.username.value.trim() == '') {
        alert('用户名不得为空');
        return false;
    }

    if (fm.password.value.trim() == ''){
        alert('密码不得为空');
        return false;
    }    
    return true;
}
