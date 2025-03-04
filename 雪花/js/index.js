		var lheight=$(window).height();
		var lwidth=$(window).width();
		$(function(){
			//雪花颜色
			// var xuecolor=rgb();
			//透明度0.3-0.7
			var staopacity=0.7+Math.random()*0.2;
			var endopacity=0.2+Math.random()*0.2;
			//雪花大小
			var xuemin=5;
			var xuemax=35;
			//雪花颜色
			function randomRgbColor() { //随机生成RGB颜色
    var r = Math.floor(Math.random() * 256); //随机生成256以内r值
    var g = Math.floor(Math.random() * 256); //随机生成256以内g值
    var b = Math.floor(Math.random() * 256); //随机生成256以内b值
    return `rgb(${r},${g},${b})`; //返回rgb(r,g,b)格式颜色
}
			// var r=Math.floor(Math.random()*256);
			// var g=Math.floor(Math.random()*256);
			// var b=Math.floor(Math.random()*256);
			// var xuecolor=rgb($(r),$(g),$(b));
			var xue=$('<div></div>').css({
				'position':'absolute',
			}).html('&#10052;');
			setInterval(function(){
				var xuesize=xuemin+Math.random()*xuemax;
				xue.clone().appendTo($('body')).css({
				'top':'-40px',
				'left':lwidth*Math.random(),
				'opacity':staopacity,
				'font-size':xuesize,
				'color':randomRgbColor(),//'#abcdef'//'rgb({Math.random()*255,Math.random()*255,Math.random()*255})',
				}).animate({
					'top':lheight,
					'left':lwidth*Math.random(),
					'opacity':endopacity,
				},15000,function(){
					$(this).remove();
				})
					
			},300)
			
			
			$('.img').eq(0).show().siblings().hide();
			var i=0;
			setInterval(function(){
				i++;
				if(i==6){
					i=0;
				}
			$('.img').eq(i).fadeIn(1000).siblings().fadeOut(1000);
			},3000)
			
			
			
			
		})
