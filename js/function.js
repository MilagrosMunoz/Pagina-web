jQuery(document).ready(function()
{
	
	setTimeout(function () {
        jQuery(".button-support").trigger("click");
    }, 5000);
	
	jQuery(window).scroll(function() 
	{
		topOffset = jQuery(this).scrollTop();
		if (topOffset > 130) {
			jQuery("#container-module-fixed").addClass("view-scroll");
		} else {
			jQuery("#container-module-fixed").removeClass("view-scroll");
		}
	});
	
	jQuery(".button-support").click(function(e) 
	{
		e.preventDefault();
		jQuery(".support").slideToggle();
	});		
	jQuery(".button-support-close").click(function(e) 
	{
		e.preventDefault();
		jQuery(".support").slideToggle();
	});	
	
	jQuery(".slick-carousel").slick
	({
		autoplay: true,
		autoplaySpeed: 700,
		dots: true,
		arrows: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 4,
		slidesToScroll:1,
		centerMode: false,
		variableWidth: false,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow:2,
					slidesToScroll:2,
				}
			},
			{
				breakpoint: 450,
					settings: {
						slidesToShow: 1,
						slidesToScroll:1,
						dots: false,
						arrows: false,
				}
			}
		]
	});
	
	jQuery(".slick-gallery").slick
	({
		autoplay: true,
		autoplaySpeed: 700,
		dots: true,
		arrows: true,
		infinite: true,
		speed: 1000,
		slidesToShow: 3,
		slidesToScroll:1,
		centerMode: false,
		variableWidth: false,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow:4,
					slidesToScroll:1,
				}
			},
			{
				breakpoint: 450,
					settings: {
						slidesToShow: 2,
						slidesToScroll:2,
						dots: true,
						arrows: false,
				}
			}
		]
	});
	
	jQuery(".slick-logos").slick
	({
		autoplay: true,
		autoplaySpeed: 700,
		dots: false,
		arrows: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 6,
		slidesToScroll:1,
		centerMode: false,
		variableWidth: false,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow:4,
					slidesToScroll:1,
				}
			},
			{
				breakpoint: 450,
					settings: {
						slidesToShow: 2,
						slidesToScroll:2,
						dots: true,
						arrows: false,
				}
			}
		]
	});
	
	
	
});	
