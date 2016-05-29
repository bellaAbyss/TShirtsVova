$('.show-form').click(showForm);
$('#order-purchase>#cancel').click(cancelFormEditing);

function showForm() {
	$('.show-form').css('display', 'none');
	$('#order-purchase').css('display', 'block');
}

function cancelFormEditing() {
	$('#order-purchase').css('display', 'none');
	$('.show-form').css('display', 'block');
}
