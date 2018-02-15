jQuery(function($) {

	/* Magnific Popup */
  
    $('.magnific').magnificPopup({
		type:'image',
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	$('.magnific-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 300,
		preloader: false,
		fixedContentPos: false
	});

	$('.magnific-gallery').each(function(index , value){
		var gallery = $(this);
		var galleryImages = $(this).data('links').split(',');
		var items = [];
		for(var i=0;i<galleryImages.length; i++){
			items.push({
				src:galleryImages[i],
				title:''
			});
		}
		gallery.magnificPopup({
			mainClass: 'mfp-fade',
			items:items,
			gallery:{
				enabled:true,
				tPrev: $(this).data('prev-text'),
				tNext: $(this).data('next-text')
			},
			type: 'image'
		});
	});

	$('.magnific-all').each(function() {
		var $container = $(this);
		var $imageLinks = $container.find('.item');

		var items = [];
		$imageLinks.each(function() {
			var $item = $(this);
			var type = 'image';
			if ($item.hasClass('magnific-youtube')) {
				type = 'iframe';
			}
			var magItem = {
				src: $item.attr('href'),
				type: type
			};
			magItem.title = $item.data('title');
			items.push(magItem);
		});

		$imageLinks.magnificPopup({
			mainClass: 'mfp-fade',
			items: items,
			gallery:{
				enabled:true,
				tPrev: $(this).data('prev-text'),
				tNext: $(this).data('next-text')
			},
			type: 'image',
			callbacks: {
				beforeOpen: function() {
					var index = $imageLinks.index(this.st.el);
					if (-1 !== index) {
						this.goTo(index);
					}
				}
			}
		});
	});

	/* Owl Carousel */

	var testimonials = $('#home-slider').owlCarousel({
	    autoplay: true,
	    autoplayTimeout: 5000,
        items: 1,
        loop: true
	});

	/* Open Nav Button */

    $('#open-nav').click(function() {
    	$(this).toggleClass('active');
    	$('#mobile-nav').toggleClass('is-open');
    	$('#main').toggleClass('is-slid');
    });

    /* Open Search Bar */

    $(document).on('click', '#search-bar-toggle', function() {
    	$('#search-container').toggleClass('is-open');
    	changeHeightOfMain();
    });

    var changeHeightOfMain = function() {
	    if ( $('#search-container').hasClass('is-open') ) {
	    	var heightOfNav = $('header').outerHeight();
	    	var heightOfSearchContainer = $('#search-container').outerHeight();
	    	var newHeight = heightOfNav + heightOfSearchContainer;
	    	$('#main').css('margin-top', newHeight);
	    } else {
	    	var heightOfNav = $('header').outerHeight();
	    	$('#main').css('margin-top', heightOfNav);
	    }
	}

});