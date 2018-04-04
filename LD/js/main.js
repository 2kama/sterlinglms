/***********************

Author : Mishael Kama
Date: 5th January, 2018

********************/
$(document).ready(function () {
	//sticky headers
	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header.second').outerHeight();
	$(window).scroll(function (event) {
		didScroll = true;
	});
	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250);

	function hasScrolled() {
		var st = $(this).scrollTop();
		// Make sure they scroll more than delta
		if (Math.abs(lastScrollTop - st) <= delta) return;
		// If they scrolled down and are past the navbar, add class .header_up.
		// This is necessary so you never see what is "behind" the navbar.
		if (st > lastScrollTop && st > navbarHeight) {
			// Scroll Down
			$('header.second').addClass('header_up');
			$('.pallete1').addClass('pallete_up');
		} else {
			// Scroll Up
			if (st + $(window).height() < $(document).height()) {
				$('header.second').removeClass('header_up');
				$('.pallete1').removeClass('pallete_up');
			}
		}
		lastScrollTop = st;
	}
	//end of sticky headers






	//menu Button
	$('.menuBtn1').click(function () {
		$('.pallete1').toggleClass('pallete_big');
		$('.menuTab1').toggleClass('shrink');
	});








  //notification, msg and profile pop up


	$('.msg').click(function() {
		
		$('.msgBox').toggleClass("showPop");
		$('.notyBox, .probBox').removeClass("showPop");

	});

	$('.noty').click(function() {
		
		$('.notyBox').toggleClass("showPop");
		$('.msgBox, .probBox').removeClass("showPop");

	});

	$('.user').click(function() {

		$('.probBox').toggleClass("showPop");
		$('.msgBox, .notyBox').removeClass("showPop");

	});





	//add course and topics


		$('.formArea1 .btnDarkPink').click(function() {
			$('.formArea1').fadeOut();
			$('.progress1 .tabloid:nth-child(2)').addClass('active');
					$('.progressIndicator1').css("width","75%");

			setTimeout(function() {
					$('.formArea2').fadeIn();

			}, 500);



	});

	$('.formArea2 .btnGrey').click(function() {
			$('.formArea2').fadeOut();
			$('.progress1 .tabloid:nth-child(2)').removeClass('active');
					$('.progressIndicator1').css("width","25%");

			setTimeout(function() {
					$('.formArea1').fadeIn();					

			}, 500);



	});


	$('.formArea2 .btnDarkPink').click(function() {
			$('.formArea2').fadeOut();

			setTimeout(function() {
					$('.formArea3').show();

					$('.progress1 .tabloid:nth-child(3)').addClass('active');
					$('.progressIndicator1').css("width","100%");

			}, 500);

	});


	$('.fab3').click(function() {
		$('.relay1').show();
		$('.relay3').hide();
	});

	$('.fab4').click(function() {
		$('.relay3').show();
		$('.relay1').hide();
	});


	$('select.typeUpload').change(function() {
		
		var nag = $(this).val();

		if(nag == "Text" || nag == "Quiz") {
			$('.relay4').show();

			$('.fab3').prop("checked", true);
			$('.fab4').prop("checked", false);
			$('.relay2, .relay3').hide();
			$('.relay1').show();
		}
		else {
			$('.relay4').hide();
			$('.relay2').show();
			$('.relay1, .relay3').hide();
		}

	});



	$('.nabi').click(function() {
		$('.nabiBd').removeClass('harden');
		$('.nabi .nabiHd .topicNm i').html("keyboard_arrow_down");
		$('.nabiBd', this).addClass('harden');
		$('.nabiHd .topicNm i', this).html("keyboard_arrow_up");
	});




	$('.select11').change(function() {
			var select1 = $('.select11').val();

			if(select1 == "") {
				$('.select12, .select13').prop("disabled", true);
			}
			else {
				$('.select12').prop("disabled", false);
			}
		});


		$('.select12').change(function() {
			var select2 = $('.select12').val();

			if(select2 == "") {
				$('.select13').prop("disabled", true);
			}
			else {
				$('.select13').prop("disabled", false);
			}
		});

		





 $('.nabiHd i.editMe').click(function() {
	$('.backdrop, .changeModule').fadeIn();
 });

 $('.deleteMe').click(function() {
		$('.backdrop, .deleteSome').fadeIn();

 });

 $('.addNewLearningArea').click(function() {
	$('.backdrop, .learningArea').fadeIn();
 });

  $('.editLA').click(function() {
	$('.backdrop, .editLearningArea').fadeIn();
 });


 $('.deleteLA').click(function() {
	$('.backdrop, .deleteLearningArea').fadeIn();
 });





$('.tabs .tab-links a').on('click', function (e) {
		var currentAttrValue = $(this).attr('href');
		// Show/Hide Tabs
		$('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);
		// Change/remove current tab to active
		$(this).parent('li').addClass('active').siblings().removeClass('active');
		e.preventDefault();
	});






//backdrop remove

$('.backdrop').click(function() {

	$('.backdropBox, .backdrop').fadeOut();

});





$('.msgTab').click(function() {
	$('.msgTab').removeClass("active");
	$(this).addClass("active");
	$('.msgList').addClass("upup");
});

$('.simp a').click(function() {
		$('.msgList').removeClass("upup");
});


$('.msgHead button').click(function() {
	$('.msgHead button').removeClass("active");
	$(this).addClass("active");
});

	
});