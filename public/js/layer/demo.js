var win = {
	success : function(msg){
		layer.open({
			title   : '错误提示',
			content : msg,
			icon    : 1
		});
	},
	failed : function(){
		layer.open(function(){
			title : '',
		});
	},
};

$(function(){
	$('#test1').click(function(){
		win.success('登录成功');
	});
});