// JavaScript Document

$(document).ready(function(){

			var jVal = {
			'ounces' : function() {
				$('body').append('<div id="ouncesInfo" class="info"></div>');
				
						var ouncesInfo = $('#ouncesInfo');
						var ele = $('#ounces');
						var pos = ele.offset();
						
						ouncesInfo.css({
							top: pos.top-3,
							left: pos.left+ele.width()+15
						});
						
						//using just a basic condition for testing purposes. Is the ounces field at least 6 characters?
						if(ele.val().length < 6) {
							jVal.errors = true;
								ouncesInfo.removeClass('correct').addClass('error').html('&larr; at least 6 characters').show();
								ele.removeClass('normal').addClass('wrong');
						} else {
								ouncesInfo.removeClass('error').addClass('correct').html('&radic;').show();
								ele.removeClass('wrong').addClass('normal');
						}
				}
			
			
	};	
	
	// bind jVal.ounces function to "ounces" form field
	$('#ounces').change(jVal.ounces);
		

});