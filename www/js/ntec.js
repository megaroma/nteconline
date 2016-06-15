
//models
function TopLoginForm() {
	this.loading = function (status) {
		if(status) {
			$('#ntec-auth-top-ajax-loader').show();
			$('#ntec-auth-top-login-btn').addClass('btn-disabled');
			$('#ntec-auth-top-login-btn').attr('disabled', 'disabled');
			$('#ntec-auth-top-login-btn').prop('disabled', true); 
		} else {
			$('#ntec-auth-top-ajax-loader').hide();
			$('#ntec-auth-top-login-btn').removeClass('btn-disabled');
			$('#ntec-auth-top-login-btn').attr('disabled', '');
			$('#ntec-auth-top-login-btn').prop('disabled', false);
		}
		return true;
	}

	this.validation_error = function (status) {
		if(status) {
			$('#ntec-auth-top-validate-msg').show();
		} else {
			$('#ntec-auth-top-validate-msg').hide();
		}
	}

	this.show_error = function (status) {
		if(status) {
			$('#ntec-auth-top-error-msg').show();
		} else {
			$('#ntec-auth-top-error-msg').hide();
		}
	}

}

//factory
var NTEC = (function () {
//Public
var public_ver = '1.00';

var doc_url = window.location.href;
var items = {};

function public_get_item(name) {
    if (typeof items[name]==='undefined') {
		switch (name) {
	  		case 'top-login-form':
	    	items[name] = new TopLoginForm();
	    	break;
	    	default:
	    		return false;
		}    	
    } 
    return items[name];	
}

//Private

return {
    ver: public_ver,
    get_item: public_get_item
}

})();




//events 


$( document ).ready(function() {

    //top menu auth login form
    $('.container').on('click','#ntec-auth-top-login-btn', function (event) {
        event.preventDefault();
        var form_data = $('#ntec-auth-top-login-form').serializeArray();
        var action = $('#ntec-auth-top-login-form').attr('action');
        var tlogin = NTEC.get_item('top-login-form');
        tlogin.loading(true);
        tlogin.show_error(false);
	$.ajax({
		type: "POST",
		url: action,
		data: form_data,
		dataType: "json"
			})
			.done(function( data ) {
				if(data.status == "ok") {
					tlogin.loading(false);
					window.location = window.location.pathname;
				} else if(data.status == "not_validated") {
					tlogin.validation_error(true);
					tlogin.loading(false);					
				} else {
					tlogin.show_error(true);
					tlogin.loading(false);
				}
			}).fail(function(xhr) {
			//var Response = JSON.parse(xhr.responseText);
			alert('Something went wrong. Please try again later.');
		});
        return false;
    });

    //top menu auth logout
    $('.container').on('click','#ntec-auth-top-logout', function (event) {
        event.preventDefault();
        var action = $(this).data('action');
	$.ajax({
		type: "GET",
		url: action,
		data: [],
		dataType: "json"
			})
			.done(function( data ) {
				if(data.status == "ok") {
					window.location = data.url;
				} else {
					alert("error");
				}
			}).fail(function(xhr) {
			//var Response = JSON.parse(xhr.responseText);
			alert('Something went wrong. Please try again later.');
		});
        return false;
    });




		//select type of user
		$('#registration_form').on('change','.user_role', function (event) {
			var role = $('input[name=optionsRole]:checked', '#registration_form').val();
			if(role == "tutor") {
				$('#student_id_section').hide();
			} else {
				$('#student_id_section').show();
			}
		});


});