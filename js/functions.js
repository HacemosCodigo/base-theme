(function($){

	"use strict";

	$(function(){


		console.log('hello from jquery');
		
		
                window.validateEmail = function (email) {
                        var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return regExp.test(email);
                };


	});

})(jQuery);
