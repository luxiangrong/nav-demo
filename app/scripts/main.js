'use strict';
(function($) {
    $(document).ready(function() {
    	var currentX,currentY;
    	//记录当前鼠标位置，用于延迟触发菜单弹出
    	$('.secondary-wrap').on('mousemove', function(e){
    		currentX = e.clientX;
    		currentY = e.clientY;
    	});
        $('.secondary > li').on('mouseenter.nav', function(e1) {
            var secondaryLi = $(this);
            window.setTimeout(function(){ //通过记录2级菜单的位置和当前鼠标位置，延迟一定的时间后触发菜单弹出
            	var rect1 = secondaryLi[0].getBoundingClientRect();
            	if(currentX >= rect1.left && currentX <= rect1.right && currentY >= rect1.top && currentY <= rect1.bottom) {
            		secondaryLi.find('.thirdly').slideDown();
            		secondaryLi.off('mouseleave.nav').on('mouseleave.nav', function(e2) {
            			window.setTimeout(function(){
            				var rect2 = secondaryLi[0].getBoundingClientRect();
			            	if(!(currentX > rect2.left && currentX < rect2.right && currentY > rect2.top && currentY < rect2.bottom)) {
			            		secondaryLi.find('.thirdly').slideUp();
			            	}
            			}, 200);
		                
		            });
            	}
            }, 200);
            
        });

        $('.menu li').on('mouseenter', function() {
            var target = $(this).attr('data-target');
            $('.menu li').removeClass('active');
            $('.secondary-wrap[id!="' + target + '"]').slideUp();
            $(this).addClass('active');
            $('#' + target).slideDown();
        });

        $('.secondary-wrap').on('mouseleave', function() {
            var id = $(this).attr('id');
            var _this = $(this);
            $('.menu li').removeClass('active');
            $(this).slideUp();
        });

    });
})(jQuery);
