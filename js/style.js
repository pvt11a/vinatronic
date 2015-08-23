	$(document).ready(function() {
        		$(window).load(function() {
        			/* HOME SLIDESHOW */
        			$("#main .slideshow .slider .slide").show();
        			var Indexcarousel = $("#main .slideshow .slider .cont");
        			Indexcarousel.carouFredSel({
        				responsive: true,
        				auto: {
                            			onBefore : function( data ) {
                        			$(this).trigger("currentPosition", function( pos ) {
                            				var txt = pos;
                            				$("#main .slideshow .elemBox li").removeClass("active");
                            				$("#main .slideshow .elemBox li").filter(function(index) {
                						return index == txt;
            						}).addClass("active");
                           				})},
                         				},
        
        				scroll: {
        					fx: "crossfade",
        					items: 1,
        					duration: 500,
        					pauseOnHover: true,
        				},
        				easing: "elastic",
        				swipe: {
        					onTouch: true,
        					onMouse: true,
        				},
        			});
        			
        			$("#main .slideshow .elemBox li a").click(function(){
        				$("#main .slideshow .elemBox li").removeClass("active");
        				$(this).closest("li").addClass("active");
        				var index = $("#main .slideshow .elemBox li").index($(this).closest("li"));
        				Indexcarousel.trigger("slideToPage", index);
        			});
        			/* HOME SLIDESHOW ENDS */
        			
        			/* CATEGORY SLIDER */
        			$("#main .categorySlider .item").show();
        			var Indexcarousel2 = $("#main .categorySlider .slider .cont");
        			Indexcarousel2.carouFredSel({
        				responsive: true,
        				pagination : {
        					container: "#main .categorySliderPagination",
        					anchorBuilder: function(nr, item) {
        						return '<a href="#'+nr+'" class="lfloat"></a>';
        					}
        				},
        				prev: "#main .categorySlider .nav .prev",
        				next: "#main .categorySlider .nav .next",
        				auto: true,
        				scroll: {
        					items: 1,
        					duration: 400,
        					pauseOnHover: true,
        				},
        				swipe: {
        					onTouch: true,
        					onMouse: true,
        				},
        			});
        			/* CATEGOR SLIDER ENDS */
        			
        		});
                
               
                var url = document.location.href;
                $('#main .cat ul li a ').each(function(){
                    if($(this).attr('href') == url) {
                        $(this).addClass('active');
                    }
                });
                
                
        	});//end document