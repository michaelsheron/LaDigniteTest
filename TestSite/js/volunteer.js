/*
Jquery Validation using jqBootstrapValidation
example is taken from jqBootstrapValidation docs
*/
$(function() {
	$("input,textarea").jqBootstrapValidation(
	{
		preventSubmit: true,
		submitError: function($form, event, errors) {
		// something to have when submit produces an error ?
		// Not decided if I need it yet
		},
		submitSuccess: function($form, event) {
			event.preventDefault(); // prevent default submit behaviour
			// get values from FORM
			var name = $("input#fname").val();
			var email = $("input#email").val();
			var message = $("textarea#message").val();
			var firstName = name; // For Success/Failure Message
			// Check for white space in name for Success/Fail message
			if (firstName.indexOf(' ') >= 0) {
				firstName = name.split(' ').slice(0, -1).join(' ');
			}
			$.ajax({
				type: "POST",
				url: "../php/volunteerformcode.php",//not accessing this. it's accessing the php under the action tag on the form
				data: $('form#contact').serialize(),//{name: name, email: email, message: message},
				cache: false,
				success: function() {
					//
					$('#success').html(
					"<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Message sent successfully. Thank you again. </strong></div>"
					);
					//
					
					// Success message
	//				$('#success').html("<div class='alert alert-success'>");
	//				$('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
	//				.append( "</button>");
	//				$('#success > .alert-success')
	//				.append("<strong>Message sent successfully. Thank you again. </strong>");
	//				$('#success > .alert-success')
	//				.append('</div>');
	//				//disable buttons
	//				document.getElementById("sub").disabled = 'true';
					//$("input#sub").trigger("reset");
	//				//clear all fields
					$('#contact').trigger("reset");
				},
				error: function() {	
					// Fail message
					$('#success').html("<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Sorry "+firstName+" it seems that my mail server is not responding...</strong> Please email me directly to <a href='info@ladigniteglobal.org?Subject=error from La Dignite contact form'>info@ladigniteglobal.org</a>. Sorry for the inconvenience.</div>");
					
					//$('#success').html("<div class='alert alert-danger'>");
	//				$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
	//				.append( "</button>");
	//				$('#success > .alert-danger').append("<strong>Sorry "+firstName+" it seems that my mail server is not responding...</strong> Please email me directly to <a href='mailto:ralf.riedel@usm.edu?Subject=error from MITTFL contact form'>ralf.riedel@usm.edu</a>. Sorry for the inconvenience.");
	//				$('#success > .alert-danger').append('</div>');
	//				//disable buttons
					//document.getElementById("sub").disabled = true;
					//clear all fields
					$('#contact').trigger("reset");
				},
			}) //ajax
		},
		filter: function() {
			//document.getElementById("sub").disabled = false;
			return $(this).is(":visible");
		},
	});//jqBootstrapValidation
	$("a[data-toggle=\"tab\"]").click(function(e) {
		e.preventDefault();
		$(this).tab("show");
	});
	/*When clicking on Full hide fail/success boxes */
	$('#name').focus(function() {
		$('#success').html('');
	});
});
