

<!-- Mirrored from winnerssacco.org/appln2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 11:42:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>New' SACCO</title>

	<link rel="icon" type="image/png" href="assets/img/WEBSITE%20LOGO%20PNG.png">

	<!-- <link rel="stylesheet" href="/assets/css/intlTelInput.css" /> -->
	<!-- <script src="/assets/js/intlTelInput.min.js"></script> -->
	<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="../cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
	<style>
		/*custom font*/
		@import url(https://fonts.googleapis.com/css?family=Montserrat);

		/*basic reset*/
		* {
			margin: 0;
			padding: 0;
		}

		html {
			height: 100%;
			/*Image only BG fallback*/

			/*background = gradient + image pattern combo*/
			background:
				linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
		}

		body {
			font-family: montserrat, arial, verdana;
		}

		/*form styles*/
		#msform {
			width: 90%;
			height: 80%;
			margin: 50px auto;
			text-align: center;
			position: relative;
		}

		#msform fieldset {
			background: white;
			border: 0 none;
			border-radius: 3px;
			box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
			padding: 20px 30px;
			box-sizing: border-box;
			width: 80%;
			margin: 0 10%;

			/*stacking fieldsets above each other*/
			position: relative;
		}

		/*Hide all except first fieldset*/
		#msform fieldset:not(:first-of-type) {
			display: none;
		}

		/*inputs*/
		#msform input,
		#msform textarea,
		#msform select,
		#msform select option {
			padding: 15px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
			font-family: montserrat;
			color: #2C3E50;
			font-size: 13px;
		}

		/*buttons*/
		#msform .action-button {
			width: 100px;
			background: #e73c3e;
			font-weight: bold;
			color: white;
			border: 0 none;
			border-radius: 1px;
			cursor: pointer;
			padding: 10px 5px;
			margin: 10px 5px;
		}

		#msform .action-button:hover,
		#msform .action-button:focus {
			box-shadow: 0 0 0 2px white, 0 0 0 3px #e73c3e;
		}

		/*headings*/
		.fs-title {
			font-size: 15px;
			text-transform: uppercase;
			color: #e73c3e;
			margin-bottom: 10px;
		}

		.fs-subtitle {
			font-weight: normal;
			font-size: 13px;
			color: #666;
			margin-bottom: 20px;
		}

		/*progressbar*/
		#progressbar {
			margin-bottom: 30px;
			overflow: hidden;
			/*CSS counters to number the steps*/
			counter-reset: step;
		}

		#progressbar li {
			list-style-type: none;
			color: white;
			text-transform: uppercase;
			font-size: 9px;
			width: 33.33%;
			float: left;
			position: relative;
		}

		#progressbar li:before {
			content: counter(step);
			counter-increment: step;
			width: 20px;
			line-height: 20px;
			display: block;
			font-size: 10px;
			color: #333;
			background: white;
			border-radius: 3px;
			margin: 0 auto 5px auto;
		}

		/*progressbar connectors*/
		#progressbar li:after {
			content: '';
			width: 100%;
			height: 2px;
			background: white;
			position: absolute;
			left: -50%;
			top: 9px;
			z-index: -1;
			/*put it behind the numbers*/
		}

		#progressbar li:first-child:after {
			/*connector not needed before the first step*/
			content: none;
		}

		/*marking active/completed steps green*/
		/*The number of the step and the connector before it = green*/
		#progressbar li.active:before,
		#progressbar li.active:after {
			background: #e73c3e;
			color: white;
		}
	</style>
</head>

<body>
	<!-- multistep form -->
	<!-- <form id="msform" action="https://winnerssacco.org/api/member_registration.php" method="POST" class="memberRegistrationForm" -->
		<form id="msform" action="enctypemultipart/form-data"> 
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Personal Details</li>
			<li>Next of Kin Details</li>
			<li>Account Details</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Personal Details</h2>
			<h3 class="fs-subtitle">Provide your Personal Details below</h3>
			<select name="title">
				<option selected value="">Title *</option>
				<option value="Mr.">Mr</option>
				<option value="Mrs.">Mrs</option>
				<option value="Miss.">Miss</option>
				<option value="Prof.">Prof.</option>
				<option value="Dr.">Dr.</option>
			</select name="gender">
			<select name="sex">
				<option selected value="">Gender *</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="Other">Rather Not Say</option>
			</select>

			<input type="text" name="fname" placeholder="First Name *" required />
			<input type="text" name="lname" placeholder="Last Name *" required />
			<input type="text" name="oname" placeholder="Other Names (Optional)" />

			<input type="text" name="occupation" placeholder="Occupation *" />

			<input type="text" name="physical_address" placeholder="Physical Address *" required />
			<input name="mobile_number" type="text" id="phone" required style="display:block !important;" />
			<br />
			<input type="text" name="email" placeholder="Email Address (Optional)" />

			<input type="button" name="next" class="next action-button" value="Next" />

		</fieldset>
		<fieldset>
			<h2 class="fs-title">Next of Kin Details</h2>
			<h3 class="fs-subtitle">Provide your Next of Kin Details below</h3>
			<select name="ktitle">
				<option selected value="">Title *</option>
				<option value="Mr.">Mr</option>
				<option value="Mrs.">Mrs</option>
				<option value="Miss.">Miss</option>
			</select>
			<select name="kgender" required>
				<option selected value="">Gender *</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Rather Not Say</option>
			</select>

			<input type="text" name="kin_fname" placeholder="First Name *" required />
			<input type="text" name="kin_lname" placeholder="Last Name *" required />
			<input type="text" name="kin_other_name" placeholder="Other Names (Optional)" />

			<input type="text" name="kin_physical_address" placeholder="Physical Address *" required />
			<!--<input type="tel" name="kmobile" placeholder="Mobile Number *" required/>-->
			<input name="kin_mobile_number" type="text" id="phonex" required style="display:block !important;" />
			<input type="text" name="kin_email" placeholder="Email Address (Optional)" />

			<textarea name="kin_relationship" placeholder="Describe your Relationship with this Person"></textarea>

			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>

		<fieldset>
			<h2 class="fs-title">Account Details and Attachments</h2>
			<h3 class="fs-subtitle">Kindly share your details below before submitting for approval!</h3>
			<select name="acc_type" required>
				<option selected required>Select your Preferred Account *</option>
									<option value="8432"> Fixed Savings Account </option>
									<option value="8431"> Current Savings Account </option>
									<option value="8435"> Toto Savings Account </option>
									<option value="8434"> Group/Club Savings Account </option>
									<option value="8433"> Joint Savings Account </option>
							</select>

			<label>Your Recent Passport Photo / Selfie Photo * (PDF or JPG)</label>
			<input type="file" name="photo" />
			<label>Photo of your Signature on a Plain Paper * (PDF or JPG)</label>
			<input type="file" name="sign" />
			<label>Photo of the front-view of your National ID / Passport or Driving Permit * (PDF or JPG)</label>
			<input type="file" name="id" />
			<textarea name="other" placeholder="Any Other Details you wish us to know *"></textarea>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="submit" class="submit action-button" value="Submit" />
		</fieldset>
	</form>

	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<script src="assets/js/jquery_2.1.3.min.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>

	<script src="assets/js/custom.js"></script>
	<script src="assets/js/axios.min.js"></script>
	<script src="assets/js/sweetalert2.all.min.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>

	<script>
		// showLoader();
		// $('body').on('submit', '.memberRegistrationForm', function(event) {
		// 	event.preventDefault();
		// 	var form = $(this);
		// 	var form_container = form.parents('.form-container');
		// 	var formId = $(this).attr('id');
		// 	var url = $(this).attr('action');
		// 	/* var formData = new FormData($(this)[0]);*/
		// 	var formData = new FormData($('#' + formId)[0]);
		// 	/* console.log("formData "+ formData);*/
		// 	var button = form.find('.btnPayment');
		// 	$.ajax({
		// 		url: url,
		// 		method: "POST",
		// 		data: formData,
		// 		contentType: false,
		// 		cache: false,
		// 		processData: false,
		// 		headers: {
		// 			Authorization: "Bearer {{session('access_token')}}"
		// 		},
		// 		beforeSend: function(data) {
		// 			initiateFormSubmissionButton(button);
		// 		},
		// 		success: function(response) {
		// 			if (response.success) {
		// 				pushNotificationSuccess("Action successful");
		// 				form.trigger("reset");
		// 				form_container.find('.post_payment').addClass('hide');
		// 				form_container.find('.payment_response').removeClass('hide');
		// 			} else {
		// 				pushNotificationError(response.message);
		// 			}
		// 			completeFormSubmissionButton(button)
		// 		},
		// 		error: function(error) {
		// 			pushNotificationError("Check your internet connection");
		// 			completeFormSubmissionButton(button)
		// 		}
		// 	})
		// });
	</script>

	<script>
		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
			separateDialCode: true,
			//Default country
			initialCountry: "ug",
			excludeCountries: ["in", "il"],
			preferredCountries: ["ru", "jp", "pk", "no"]
		});

		var inputx = document.querySelector("#phonex");
		window.intlTelInput(inputx, {
			separateDialCode: true,
			//Default country
			initialCountry: "ug",
			excludeCountries: ["in", "il"],
			preferredCountries: ["ru", "jp", "pk", "no"]
		});
	</script>
	<script>
		//jQuery time
		var current_fs, next_fs, previous_fs; //fieldsets
		var left, opacity, scale; //fieldset properties which we will animate
		var animating; //flag to prevent quick multi-click glitches

		$(".next").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50) + "%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'transform': 'scale(' + scale + ')',
						'position': 'absolute'
					});
					next_fs.css({
						'left': left,
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".previous").click(function() {
			if (animating) return false;
			animating = true;

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//de-activate current step on progressbar
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale previous_fs from 80% to 100%
					scale = 0.8 + (1 - now) * 0.2;
					//2. take current_fs to the right(50%) - from 0%
					left = ((1 - now) * 50) + "%";
					//3. increase opacity of previous_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'left': left
					});
					previous_fs.css({
						'transform': 'scale(' + scale + ')',
						'opacity': opacity
					});
				},
				duration: 800,
				complete: function() {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		// $(".submit").click(function(event) {
		$('body').on('submit', '.memberRegistrationFor', function(event) {
			// 	return false;
			// location.href = 'success_page.php';

			event.preventDefault();
			var form = $(this).parents("form");
			var formId = form.attr('id');
			var url = form.attr('action');
			/* var formData = new FormData($(this)[0]);*/
			var formData = new FormData($('#' + formId)[0]);
			console.log("formData " + formData);
			$.ajax({
				url: url,
				method: "POST",
				data: formData,
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function(data) {
					showLoader();
				},
				success: function(response) {
					console.log("response ", response);
					if (response.success) {
						pushNotificationSuccess("Action successful");
						form.trigger("reset");
					} else {
						pushNotificationError(response.message);
					}
					// completeFormSubmissionButton(button)
				},
				error: function(error) {
					pushNotificationError("Check your internet connection");
					// completeFormSubmissionButton(button)
				}
			})
		})
	</script>
</body>