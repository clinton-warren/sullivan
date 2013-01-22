jQuery(document).ready(function(){
	

	
	// Remove the class of child and grandchild
		// This removes the CSS 'falback'
		$("#nav ul.child").removeClass("child");
		$("#nav ul.grandchild").removeClass("grandchild");

		// When a list item that contains an unordered list
		// is hovered on
		$("#nav li").has("ul").hover(function(){

			//Add a class of current and fade in the sub-menu
			$(this).addClass("current").children("ul").fadeIn();
		}, function() {

			// On mouse off remove the class of current
			// Stop any sub-menu animation and set its display to none
			$(this).removeClass("current").children("ul").stop(true, true).css("display", "none");
		});
		
		
	
	// onMouseEnter remove default values, re-enter if nothing is entered
	$('.contact-input').each(function() {
	    var default_value = this.value;

	    $(this).focus(function() {
	        if(this.value == default_value) {
	            this.value = '';

	        }
	    });
	    $(this).blur(function() {
	        if(this.value == '') {
	            this.value = default_value;
	        }
	    });

	});	
	
	// animation for list link hover
	
	$('.list-link').hover( 
		
	function() {
		$(this).css('background', 'url("wp-content/themes/sullivan/images/hover-bg.png") repeat');
		
	},
	function() {
		$(this).css('background','none');
	});
	
	
	
	
	
	// AJAX for contact forms
	$('#homepage-contact, #contact-form').submit( function() {
		var formData = $(this).serialize();
		
		$.ajax({
			type: 'POST',
			url: MyAjax.ajaxurl,
			data: formData,
			success: function() { 
				$('.contact-success').slideDown('slow');
				
			}
		});
		
	return false;
		
	});
	
	
	
})