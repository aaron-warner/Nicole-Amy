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

	var testimonials = $('#testimonials').owlCarousel({
	    autoplay: true,
	    autoplayTimeout: 5000,
	    dots: true,
        items: 1,
        loop: true
	});
  
});

/* Instagram Feed */
var feed = new Instafeed({
    get: 'tagged',
    tagName: 'awesome',
    clientId: 'd642a7a4c78c423ab116ec13982d3124',
    accessToken: '6098617759.d642a7a.c8c9652e6c9842dca576b7688c221910',
    template: '<a href="{{link}}"><img src="{{image}}" /></a>'
});
feed.run();

// var userFeed = new Instafeed({
//     get: 'user',
//     userId: '528837223',
//     accessToken: '6098617759.d642a7a.c8c9652e6c9842dca576b7688c221910'
// });
// userFeed.run();

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("mobileNav").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("mobileNav").style.height = "0%";
}