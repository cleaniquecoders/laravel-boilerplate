/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
	window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
	console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

let api_header_accept = document.head.querySelector('meta[name="api-header-accept"]');

if (api_header_accept) {
	window.axios.defaults.headers.common['Accept'] = api_header_accept.content;
} else {
	console.error('API Header Accept Not Found');
}

let api_version = document.head.querySelector('meta[name="api-version"]');

if (api_header_accept) {
	window.axios.defaults.headers.common['Version'] = api_version.content;
} else {
	console.error('API Version Not Found');
}

/**
 * Add a request interceptor
 */
axios.interceptors.request.use(function (config) {
	$('.loader-container').show();
		return config;
	}, function (error) {
  		console.error(error);
		$('.loader-container').hide();
		swal({ title : 'Error', html : 'Unable to make request.', type  : 'error' });
		return Promise.reject(error);
	}
);

/**
 * Add a response interceptor
 */
axios.interceptors.response.use(function (response) {
	$('.loader-container').hide();
		return response;
	}, function (error) {
		$('.loader-container').hide();
		if(error.hasOwnProperty('response') && error.response.hasOwnProperty('data')) {
			var title = 'Error';
			var errors = error.response.data.errors;
			var error_message = '';

			if(error.response.data.hasOwnProperty('errors')) {
				$.each(errors, function(index, elem) {
		            error_message += (Array.isArray(elem) ? elem[0] : elem) + '<br>';
		        });	
		        if(error.response.data.hasOwnProperty('message')) {
					title = error.response.data.message;
				}
			} else {
				if(error.response.data.hasOwnProperty('message')) {
					error_message = error.response.data.message;
				}
			}

	        swal({ title : title, html : error_message, type  : 'error' });
		}
		return Promise.reject(error);
	}
);
