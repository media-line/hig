jQuery(document).ready(function() {
   
    function headerFix () {
		var height = jQuery('.header_menu').offset().top;
		var show = 0;
		jQuery(window).scroll(function() {
		    if ((jQuery(this).scrollTop() > height)&&(!show)) {
			    show = 1;
				jQuery('.fixed-header').addClass('fixed-header-active');
            }
		    if ((jQuery(this).scrollTop() < height)&&(show)) {
			    show = 0;
				jQuery('.fixed-header').removeClass('fixed-header-active');
            }
		}); 	
	}

	function manufacturesToggle () {
	    jQuery('.manufacture_more').click(function() {
		    jQuery(this).siblings('.manufacturer_description').slideToggle(500);
			if (jQuery(this).hasClass('button-hide')) {
			    jQuery(this).html('Подробнее'); 
				jQuery(this).removeClass('button-hide');
				jQuery(this).siblings('.manufacture_object').removeClass('object-show');
				return;
			}
			jQuery(this).html('Скрыть');
			jQuery(this).addClass('button-hide');
			jQuery(this).siblings('.manufacture_object').addClass('object-show');
		});
	}
	
	headerFix();
	manufacturesToggle();

	jQuery(function()
	{
		jQuery('.sblock2_inner.products').jScrollPane(
			{
				verticalDragMinHeight: 10,
				verticalDragMaxHeight: 10
			}
		);
	});
	
});

jQuery(window).load(function() {

	function pageLift () {
		var bodyHeight = jQuery('body').height();
		var borderHeight = 1500;
		
		if (bodyHeight > borderHeight) {
			jQuery('.lift_button').addClass('lift_button_show');
		}
		
		jQuery('.lift_bottom').click(function() {
			jQuery('body').animate({"scrollTop":bodyHeight}, 1000);		
		});
		jQuery('.lift_top').click(function() {
			jQuery('body').animate({"scrollTop":0}, 1000);		
		});
	}
    
    //Выравниваем высоту блоков похожих продуктов
    function relatedProductHeightFix () {
        var maxImgHeight = 0;
        var maxNameHeight = 0;

            
        
        //находим самые большие по высоте картинки и названия
        jQuery('.related_product_wrap').each(function(){
            
            var imgHeight = jQuery(this).find('.img').outerHeight(true);
            var nameHeight = jQuery(this).find('.name').outerHeight(true);
            
            if (imgHeight > maxImgHeight){
                maxImgHeight = imgHeight;
            }
            if (nameHeight > maxNameHeight){
                maxNameHeight = nameHeight;
            }
            console.log(imgHeight);
            
        });
        
        //делаем одинаковую высоту у всех блоков
        jQuery('.related_product_wrap .img').css({
           'min-height':  maxImgHeight + 'px'
        });
        jQuery('.related_product_wrap .name').css({
           'min-height':  maxNameHeight + 'px'
        });

	}

    relatedProductHeightFix ();
	pageLift ();
	
});
