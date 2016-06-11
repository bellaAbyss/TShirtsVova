$(document).ready(function() {
	var isToday = (function () {
		var today = new Date();
		return function(date) {
			return date.getDate() == today.getDate() &&
				date.getMonth() == today.getMonth() &&
				date.getFullYear() == today.getFullYear();
		};
	})();


	$.prototype.serialize = function() {
		var data = {};
		this.find(".form-field").each(function(index, item) {
			if (item.type == "checkbox")
				data[item.id] = item.checked;
			else
				data[item.id] = item.value;
		});
		return JSON.stringify({data: data});
	};

	$('#date').datetimepicker({
		theme: 'light',
		format: 'd.m.Y H:i',
		lang: 'ru',
		minDate: 0,
		minTime: 0,
		onSelectDate: function (ctx, $i) {
			var minTime = '00:00';
			if (isToday(ctx)) {
				minTime = 0;
			}
			$i.datetimepicker({minTime: minTime});
		}
	});

	var form = $('form');

	form.find('#date').focusin(function (e) {
		document.activeElement.blur();
		form.find('input').blur();
	});

	var name = form.find('#name');
	name.keydown(function(event) {
		var key = event.key || String.fromCharCode(event.keyCode || event.charCode);
		if (/^[0-9]$/i.test(key))
			return false;
	});

	/* Обработка поля phone */
	var phone = form.find('input#phone');
	var numbers = [];

	phone.keydown(function(event) {
		if (event.key == "Tab" || event.keyCode == 9)
			return true;
		if (event.key == "Backspace" || event.keyCode == 8)
		numbers.splice(numbers.length-1, 1);
		var key = event.key || String.fromCharCode(event.keyCode || event.charCode);
		if (numbers.length < 10 && /^[0-9]$/i.test(key)) {
			numbers.push(key);
		} else if (numbers.length >= 10) {
			return false;
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

	var parsePhone = function(event) {
		var isBackspace = event.key == "Backspace" || event.keyCode == 8;
		var autocompleteEvent = event.key == "Enter" || event.keyCode == 13 || event.type == "input";
		if (!isBackspace && autocompleteEvent) {
			var groups = /\+[7] \((\d{3})\) (\d{3})\-(\d{2})\-(\d{2})/.exec(phone.val());
			// console.log(groups);
			if (groups != null) {
				numbers.splice(0, numbers.length);
				for (var i = 1; i < groups.length; i++) {
					var group = groups[i].split("");
					for (var j = 0; j < group.length; j++)
						numbers.push(group[j]);
				}
			}
		}
		phone.val(format());
	};

	phone.keyup(parsePhone);
	document.getElementById("phone").addEventListener("input", function(e) {parsePhone(e);});

	function format() {
		var length = numbers.length;
		var string = "";

		if (length >= 0)
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
			return validity;
		}

		$.ajax({
				method: 'POST',
				async: true,
				url: "/Action.php",
				data: { "data": form.serialize() }
			})
			.done(function(data) {
				form.find('#form-success').css("display", "block");
			})
			.fail(function(data) {
				form.find('#form-fail').css("display", "block");
			});
		return false;
	});
});