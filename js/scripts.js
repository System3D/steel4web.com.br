$(function() {
    var $el, $ps, $up, totalHeight;

    $(".sidebar-box .button").click(function() {

        totalHeight = 0

        $el = $(this);
        $p = $el.parent();
        $up = $p.parent();
        // $ps = $up.find(":not('.read-more')");
        $ps = $up.children(":not('.read-more')");

        // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
        $ps.each(function() {
            // console.log( $(this).css("margin-bottom").replace("px", "") );
            margintop = $(this).css("margin-top").replace("px", "");
            marginbottom = $(this).css("margin-bottom").replace("px", "");
            totalHeight += $(this).outerHeight() + parseInt(margintop) + parseInt(marginbottom);
        });

        console.log(totalHeight);

        // totalHeight += 20;

        // prevent jump-down
        // return false;

        $up
            .css({
                // Set height to prevent instant jumpdown when max height is removed
                "height": $up.height(),
                "max-height": 9999
            })
            .animate({
                "height": totalHeight
            });

        // fade out read-more
        $p.fadeOut();

        // prevent jump-down
        return false;

    });


    /**
     * FANCYBOX
     */
    $(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 0
    });


    /*    
     *	OWL CAROUSELFANCYBOX
     */     
    $(".owl-carousel").owlCarousel({    	
    	loop:true,
    	nav:true,
    	navtext:['Ant', 'Prox'],
	    margin:20,
	    center:true,
	    items:1,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            nav:true
	        },
	        600:{
	            items:1,
	            nav:true
	        },
	        1000:{
	            items:1,
	            nav:true,
	            loop:true
	        }
	    }
    });


});
