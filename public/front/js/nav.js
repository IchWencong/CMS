$(function(){
    var title = $('fireup').eq(0).text();
    $('.center li').each(function(){
        if (this.innerHTML.indexOf(title) != -1) {
            this.className += ' hover';
        }
    });
});
