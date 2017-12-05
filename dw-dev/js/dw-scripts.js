jQuery(function () {

	/**
	 * Fixed search handle.
	 */
	jQuery("#open-search").on("click", function() {
		jQuery("#fixed-search-form").addClass("visible");
		jQuery("#close-search").on("click", function(){
			jQuery("#fixed-search-form").removeClass("visible");
		});
		/* focus the input search when visible */
		setTimeout(function timeoutFunction() {
			jQuery(".search-field").focus();
		}, 1200);
	});
	jQuery("[data-fancybox]").fancybox({
		animationEffect: "zoom-in-out",
	});

	/**
	 * Add Fancybox functionality to all images and gallery.
	 */
	jQuery.fn.getTitle = function () {
		var arr = jQuery("a.fancybox");
		jQuery.each(arr, function () {
			var title = jQuery(this).children("img").attr("title");
			var caption = jQuery(this).children("img").attr("alt");
			var id = jQuery(this).parent().parent().parent().attr('id');
			jQuery(this).attr('title', title).attr('data-caption', caption).attr('data-fancybox', id);
		})
	}

	var images = jQuery("a:has(img)").not(".nolightbox").filter(function () { 
		return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) 
	});

	var gallery = jQuery(".gallery-item a:has(img)").not(".nolightbox").filter(function () {
		return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) 
	});

	images.addClass("fancybox").getTitle();
	images.attr("data-fancybox", "");

	gallery.addClass("fancybox").getTitle();


	/**
	 * Infinite scroll.
	 */
	jQuery('.projects-list').infiniteScroll({
		path: '#more-posts',
		append: '.project',
		history: false,
		status: '.page-load-status',
		hideNav: '#more-posts',
		scrollThresold: 50,
	});

	/**
	 * Send category portfolio form on select change.
	 */
	jQuery('#portfolio-categories-select').on( 'change', function () {
		jQuery("#cat-form").submit();
	});

	jQuery('#show-map').on('click', function () {
		jQuery('.contact-full-content, .address').toggleClass('visible');
		jQuery(this).toggleClass('toggled');
		jQuery('body').toggleClass('full-map');
	});
});
