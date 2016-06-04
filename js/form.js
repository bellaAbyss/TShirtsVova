$(document).ready(function() {
	$.prototype.mask = function(mask) {
		
	};
	
	$.prototype.serialize = function() {
		var data = {};
		this.find("input").each(function(index, item) {
			data[item.id] = item.value;
		});
		return JSON.stringify({data: data});
	};
	
	$('#date').datetimepicker({
		format: 'd.m.Y H:i',
		lang: 'ru',
		minDate: 0,
		minTime: 0
	});
	
	var form = $('form');
	var notifier = form.find('#form-success');
	
	var name = form.find('#name');
	name.keypress(function(event) {
		if (/^[^A-ZА-Я]$/i.test(event.key))
			event.preventDefault();
	});
	
	/* Обработка поля phone */
	var phone = form.find('input#phone');
	var numbers = [];
	
	phone.keypress(function(event) {
		if (event.key == "Tab")
			return;
		if (event.key == "Backspace")
			numbers.splice(numbers.length-1, 1);
		if (numbers.length < 10 && /^[0-9]$/i.test(event.key)) {
			numbers.push(event.key);
		} else if (numbers.length >= 10) {
			event.preventDefault();
		}
	});
	phone.focusin(function(event) {
		if (phone.val().length == 0)
			phone.val("+7 (");
	});
	phone.focusout(function(event) {
		if (phone.val() == "+7 (")
			phone.val("");
	});
	phone.keyup(function(event) {
		phone.val(format());
	});
	
	function format() {
		var length = numbers.length;
		var string = "";
		
		if (length > 0)
			string = "+7 (" + numbers.slice(0, 3).join("");
		if (length >= 3)
			string = string + ") " + numbers.slice(3, 6).join("");
		if (length >= 6)
			string = string + "-" + numbers.slice(6, 8).join("");
		if (length >= 8)
			string = string + "-" + numbers.slice(8, 10).join("");
		
		return string;
	}
	
	var toggle = form.find("#delivery");
	toggle.change(function(event) {
		var checked = toggle.prop("checked");
		form.find('.form-optional')
			.css('display', checked ? 'block' : 'none');
		form.find('.form-optional input')
			.attr("required", checked);
	});
	form.find('.form-optional').css('display', 'none');
	
	form.submit(function(event) {
		event.preventDefault();
		var validity = true;
		form.find('input').each(function(index, item) {
			if (!item.checkValidity()) {
				$(item).prop("invalid", true);
				validity = false;
			}
		});
		if (!validity) {
			return;
		}
		var data = form.serialize();
		/*$.ajax({
		 method: 'POST',
		 async: true,
		 url: "/echo",
		 data: data
		 })
		 .always(function(data) {
		 console.log(data);
		 });*/
	});
});