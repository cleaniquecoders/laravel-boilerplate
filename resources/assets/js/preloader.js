// Add a request interceptor
axios.interceptors.request.use(function (config) {
	$('.loader-container').show();
	return config;
  }, function (error) {
	$('.loader-container').hide();
	return Promise.reject(error);
  });

// Add a response interceptor
axios.interceptors.response.use(function (response) {
	$('.loader-container').hide();
	return response;
  }, function (error) {
	$('.loader-container').hide();
	return Promise.reject(error);
  });

jQuery(document).ready(function($) {
	$('.loader-container').hide();
});