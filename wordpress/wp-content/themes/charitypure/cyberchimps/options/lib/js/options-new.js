jQuery(function ($) {

$('.of-radio-img-img').click(function () {
	$(this).parent().parent().parent().find('.of-radio-img-img').removeClass('of-radio-img-selected');
	$(this).addClass('of-radio-img-selected');
});

// Script to show hide the Google Text Font input depending on the value of the Text select
var font = $('#customize-control-typography_face select').val();
if (font != 'Google Fonts') {
	$('#customize-control-google_font_field').hide();
}
else {
	$('#customize-control-google_font_field').show();
}
$('#customize-control-typography_face select').change(function () {
	var font_change = $(this).val();
	if (font_change != 'Google Fonts') {
		$('#customize-control-google_font_field').hide();
}
else {
		$('#customize-control-google_font_field').show();
}
});

// Script to hide show the Google Heading Font input depending on value of the Heading select
var text = $('#customize-control-font_family_headings select').val();
if (text != 'Google Fonts') {
	$('#customize-control-google_font_headings').hide();
}
else {
	$('#customize-control-google_font_headings').show();
}
$('#customize-control-font_family_headings select').change(function () {
	var text_change = $(this).val();
	if (text_change != 'Google Fonts') {
		$('#customize-control-google_font_headings').hide();
}
else {
		$('#customize-control-google_font_headings').show();
}
});

});
