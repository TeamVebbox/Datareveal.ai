(function($) { "use strict";

	$(function() {
		var header = $(".foundationai-start-style");
		var herobanner_logo = $(".faihome-headerbanner__logo");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('foundationai-start-style').addClass("scroll-on");
				herobanner_logo.removeClass('faihome-headerbanner__logo').addClass("headerbanner__logo");
			} else {
				header.removeClass("scroll-on").addClass('foundationai-start-style');
				herobanner_logo.removeClass("headerbanner__logo").addClass('faihome-headerbanner__logo');
			}
		});
	});	
	
	
	// Extract Language inAction demo video transcript 

	const trackContent = `WEBVTT

00:05.000 --> 00:09.000 position:20%,line-left align:middle size:90%
Here we’re going to give you a quick glimpse into some of the Foundation Extract platform capabilities

00:09.200 --> 00:12.000 position:20%,line-left align:middle size:90%
that we’re currently working to deploy to streamline labor-intensive workflows around

00:12.100 --> 00:17.300 position:20%,line-left align:middle size:90%
classifying documents and emails, extracting content, and entering that content into your downstream systems.

00:18.500 --> 00:24.000 position:20%,line-left align:middle size:90%
The Foundation Extract Platform is infinitely scalable, cloud-based with micro-services architecture,

00:24.050 --> 00:27.000 position:20%,line-left align:middle size:90%
and a suite of customizable connectors and robust APIs,

00:27.020 --> 00:30.600 position:20%,line-left align:middle size:90%
the Foundation Extract Platform can augment virtually any manual workflow.

00:31.000 --> 00:35.000 position:20%,line-left align:middle size:90%
So for example, let’s picture a scanning department where thousands of pieces of mail are coming in every day

00:35.020 --> 00:38.500 position:20%,line-left align:middle size:90%
and being routed through some legacy software for staff members to do

00:38.700 --> 00:41.000 position:20%,line-left align:middle size:90%
manual classification, extraction, and data entry.

00:42.000 --> 00:46.000 position:20%,line-left align:middle size:90%
A front-line data entry staff member might receive a consolidated document like this,

00:46.500 --> 00:53.000 position:20%,line-left align:middle size:90%
which includes some ACORD forms, some insurance cards, some medical reports, and some letters

00:53.500 --> 00:57.000 position:20%,line-left align:middle size:90%
that they have to sort, process, and extract into a downstream system.

00:58.000 --> 01:05.000 position:20%,line-left align:middle size:90%
Foundation AI pre-configures Extract for each use case so that it streamlines your process at the outset and delivers immediate ROI.

01:07.000 --> 01:12.000 position:20%,line-left align:middle size:90%
As we can see, the system has already sorted this consolidated document and separated it out by type.

01:12.200 --> 01:18.000 position:20%,line-left align:middle size:90%
Because Extract uses machine learning and pattern recognition rather than a template-based approach,

01:18.100 --> 01:25.000 position:20%,line-left align:middle size:90%
it can deal with these variations in form like between this picture of an insurance card and this screenshot of one. 

01:26.000 --> 01:32.000 position:20%,line-left align:middle size:90%
And it knows this document is an AME report, Agreed Medical-Legal Evaluation, which a staff member would have probably seen pretty quickly,

01:32.200 --> 01:40.000 position:20%,line-left align:middle size:90%
but it also knows that this document is an AME, which a staff member may have missed because it doesn’t say so in the title.

01:40.200 --> 01:45.000 position:20%,line-left align:middle size:90%
You’d have to actually read this document and understand these code sections to figure out what it is.

01:45.500 --> 01:52.000 position:20%,line-left align:middle size:90%
The Extract software can consistently capture data from virtually any document regardless of the format.

01:53.000 --> 02:01.000 position:20%,line-left align:middle size:90%
The same model that extracts data from this insurance card can also extract that data from this one even though they look completely different.

02:02.000 --> 02:11.000 position:20%,line-left align:middle size:90%
And so it doesn’t matter that the values to be extracted from this AME report are organized like this and from this AME report are organized differently. The system can accommodate. 

02:12.000 --> 02:17.800 position:20%,line-left align:middle size:90%
And if I want to make a change, for example, change a document date, I can just do so right in the screen.

02:18.400 --> 02:23.000 position:20%,line-left align:middle size:90%
And the system learns from these changes, fine-tuning the models through this user feedback.

02:24.000 --> 02:29.000 position:20%,line-left align:middle size:90%
Because our data scientists pre-configure and pre-train Extract with the optimal AI models for each type of use case,

02:29.200 --> 02:34.000 position:20%,line-left align:middle size:90%
the system can consistently extract the desired outputs from even these unstructured documents.

02:35.000 --> 02:38.000 position:20%,line-left align:middle size:90%
And through this human-in-the-loop validation and exception handling,

02:38.200 --> 02:44.400 position:20%,line-left align:middle size:90%
the system continues to learn on its own becoming more autonomous with each document that it processes.
`;

const trackBlob = new Blob([trackContent], {
  type:"text/plain;charset=utf-8"
});

const trackUrl = URL.createObjectURL(trackBlob);

document.querySelector("#caption-track").src = trackUrl;
		


	//Animation
	
	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');

		// $(".header-submenu--link a").hover(
		// 	function () {
		// 	  $(".header-dropdown--menu").toggleClass("header-dropdown--menu--opened")
			  
			        
		// 	}
		//   );
		//   $(".header-dropdown--menu").hover(
		// 	function () {
		// 	  $(this).toggleClass("header-dropdown--menu--opened")      
		// 	}
		//   );
		//   $(".header-dropdown--menu a").hover(
		// 	function () {
		// 	  $(this).parent().toggleClass("header-dropdown--menu--opened")      
		// 	}
		//   );

		//   $(".header-dropdown--submenu").hover(
		// 	function () {
		// 		$(this).parent().parent().toggleClass("header-dropdown--menu--opened")   
		// 	}
		//   );

		// var owl = $('.owl-carousel');
		// owl.owlCarousel({
		// 	items: 6,
		// 	loop: true,
		// 	margin: 80,
		// 	autoplay: true,
		// 	slideTransition: 'linear',
		// 	autoplayTimeout: 0,
		// 	autoplaySpeed: 12000,
		// 	autoplayHoverPause: false
	
		// });

		$(".owl-carousel").on("initialized.owl.carousel", () => {
			setTimeout(() => {
			  $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
			  $("section").show();
			}, 600);
		  });
		  
		  const $owlCarousel = $(".owl-carousel").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			nav: true,
			navText: [
			  '<svg width="9.516" height="14.761" viewBox="0 0 9.516 14.761"><path d="M14.761,8.4a1.05,1.05,0,0,1-1.86.691L7.4,2.663,1.9,9.087A1.05,1.05,0,1,1,.307,7.724L6.6.368a1.051,1.051,0,0,1,1.6,0l6.3,7.356a1.041,1.041,0,0,1,.265.672Zm0,0" transform="translate(0 14.761) rotate(-90)" fill="#FF9900" /></svg>',
			  '<svg width="9.515" height="14.761" viewBox="0 0 9.515 14.761"><path d="M547.788,957.27a1.05,1.05,0,0,0-1.86-.691l-5.5,6.424-5.5-6.424a1.05,1.05,0,1,0-1.589,1.363l6.293,7.355a1.051,1.051,0,0,0,1.6,0l6.3-7.355a1.04,1.04,0,0,0,.265-.672Zm0,0" transform="translate(-956.151 547.789) rotate(-90)"  fill="#FF9900" /></svg>'
			]
		  });
		  
		  $owlCarousel.on("changed.owl.carousel", e => {
			$(".owl-slide-animated").removeClass("is-transitioned");
		  
			const $currentOwlItem = $(".owl-item").eq(e.item.index);
			$currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
		  
			const $target = $currentOwlItem.find(".owl-slide-text");
			doDotsCalculations($target);
		  });
		  
		  $owlCarousel.on("resize.owl.carousel", () => {
			setTimeout(() => {
			  setOwlDotsPosition();
			}, 50);
		  });
		  
		  /*if there isn't content underneath the carousel*/
		  //$owlCarousel.trigger("refresh.owl.carousel");
		  
		  setOwlDotsPosition();
		  
		  function setOwlDotsPosition() {
			const $target = $(".owl-item.active .owl-slide-text");
			doDotsCalculations($target);
		  }
		  
		  function doDotsCalculations(el) {
			const height = el.height();
			const {top, left} = el.position();
			const res = height + top + 20;
		  
			$(".owl-carousel .owl-dots").css({
			  top: `${res}px`,
			  left: `${left}px`
			});
		  }


	});


	


	/*(function($) {
		var parallax = -0.5;

		var $bg_images = $(".bg__visionreaddoc_parllx, .bg__naturallanguage_parllx, .bg__healthcareNLP_parllx, .bg__ExtractVideoSearch_parllx, .bg__ExtractFiler_parllx, .bg__learningbanner_parllx");
		var offset_tops = [];
		$bg_images.each(function(i, el) {
			offset_tops.push($(el).offset().top);
		});

		$(window).scroll(function() {
			var dy = $(this).scrollTop();
			$bg_images.each(function(i, el) {
			var ot = offset_tops[i];
			$(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
			});
		});
		})(jQuery);

	*/



	//Menu On Hover
		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	

	
  })(jQuery); 


  
