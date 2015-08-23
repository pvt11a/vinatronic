	$(document).ready(function(){
		
		/* DONG/MO DANH MUC SEARCH */
		$("#header .nav .searchBox .catToggle").click(function(e){
			e.stopPropagation();
			$("#header .nav .searchBox .cat").toggle();
			$(document).one("click", function(ev){
				ev.stopPropagation();
				$("#header .nav .searchBox .cat").hide();
			});
		});
		
		$("#header .nav .searchBox .cat").click(function(e){
			e.stopPropagation();
		});
		
		/* CLICK DONG/MO MENU SAN PHAM */
		$("#launchSubMenu, #subProduct").hover(function(){
			$("#subProduct").stop().slideDown(300);
		}, function(){
			$("#subProduct").stop().slideUp(200);
		});
		
		/* TAT KHUNG BOOKING */
		$("#bookingPopup .box .heading .close").click(function(){
			$("#bookingPopup").fadeOut(300);
		});
		
		/* MO TA SAN PHAM */
		$("#project .desBox .tabBox a").click(function() {
			var tab = $(this).attr("data-tab");
			$("#project .desBox .tabBox a").removeClass("active");
			$(this).addClass("active");
			
			$("#project .desBox .tab").hide();
			$("#project .desBox ." + tab).show();
		});
		
		/* DONG MO DANH MUC RESPONSIVE */
		$("#main .categoryHeading .sprite-menu").click(function(){
			var elem = $(this);
			var box = elem.closest("div").siblings(".cat");
			box.slideToggle("fast", function(){
				if (box.is(":visible")){
					elem.addClass("collapsing");
				} else {
					elem.removeClass("collapsing");
				}
			});
		});
		
		/* CLICK RESPONSIVE MENU TOGGLE */
		$("#fixed_responsive_menu .toggle").click(function(){
			if ($("#fixed_responsive_menu .expanding").css("display") == "block"){
				$(this).removeAttr("style");
			} else {
				$(this).css("background-color", "rgb(225, 225, 225)");
			}
			$("#fixed_responsive_menu .expanding").toggle(function(){});
		});
		
		$("#responsiveMiddleMenuContent").css("max-height", ($(window).height() - 85));
		$("#responsiveMiddleMenu").click(function(){
			$("#responsiveTopMenuContent").hide();
			if ($("#responsiveMiddleMenuContent").css("display") == "block"){
				$(this).removeAttr("style");
			} else {
				$(this).css("background-color", "rgb(225, 225, 225)");
			}
			$("#responsiveMiddleMenuContent").slideToggle(200);
		});
		
		/* GLOBAL HOTKEYS */
		$(document).keyup(function(event){
			var chCode = (event.charCode === 0) ? event.keyCode : event.charCode;
	
			if (chCode == 27){ /* ESC */
				$("#bookingPopup .box .heading .close").click();
			}
		});
		
	});