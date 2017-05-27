//动态设置iframe的属性
var i          = $('iframe').get(0);
i.style.left   = $('.sidebar').eq(0).outerWidth() + 'px';
i.style.top    = $('nav').eq(0).height() + 'px';  
i.width        = $(document).width() - $('.sidebar').eq(0).width();
i.height       = $(document).height() - $('nav').eq(0).height();

//导航的点击变色特效
activeLi();

function activeLi(){
    $('#left').eq(0).find('li').click(function(){
         $(this).siblings().removeClass('active');
         $(this).addClass('active');    
     });
}
