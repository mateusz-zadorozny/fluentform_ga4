(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	if (typeof gtag != 'function') {
		console.log("Google Analytics 4 not initialised")
		return;
	}

	var fluentForms = $('form.frm-fluent-form');
	fluentForms.each(function () {
		var $form = $(this);
		var formId = $form.attr('data-form_id');

		gtag('event', 'ViewForm', {
			'event_category': 'FluentForms',
			'event_label': 'View Form',
			'form_id': formId
		});

		$form.on('fluentform_submission_success', function () {

			gtag('event', 'FormSubmission', {
				'event_category': 'FluentForms',
				'event_label': 'Form Submitted',
				'form_id': formId
			});

		});

	});

})(jQuery);
