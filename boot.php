<?php
	/*
	* HTML-минимизация
	*/
	ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Стильные футболки</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<meta name="author" content="Darya Kiryanova">
	<meta name="description" content="Стильные футболки с качественным принтом. Креативный дизайн, высокое качество пошива. Отличный подарок себе и любимым.">
	<meta name="keywords" content="стильные футболки, футболка, футболки, футболки с принтом">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=no">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<div class="full-background">
	<div id="d-1"></div>
	<div id="d-2"></div>
	<div id="d-3"></div>
	<div id="d-4"></div>
	<div id="d-5"></div>
</div>
<div class="vignette"></div>

<ul id="menu">
	<li data-menuanchor="main" class="active"><a href="#main">Главная</a></li>
	<li data-menuanchor="profits"><a href="#profits">Почему мы?</a></li>
	<li data-menuanchor="process"><a href="#process">Как мы работаем</a></li>
	<li data-menuanchor="delivery"><a href="#delivery">Доставка</a></li>
	<li data-menuanchor="order"><a href="#order">Заказать</a></li>
</ul>

<div id="fullpage">
	<div class="section">
		<p class="title">
			Стильная футболка с уникальным дизайном за одну минуту!
		</p>
		<a href="#order" class="purchase-btn mt-60">Оформить заказ и получить скидку 5%</a>
	</div>

	<div class="section profits">
		<p class="title">
			Особенность наших футболок
		</p>
		<div class="card">
			<div class="card-image unique-design-card"></div>
			<div class="card-desc">
				<div class="card-title">Дизайн</div>
				<p>
					Оригинальное изображение сделано на заказ.
					Футболка с таким же изображением присутствует в гардеробе
					только у 50-ти людей в мире!
				</p>
			</div>
		</div>
		<div class="card">
			<div class="card-image high-quality-card"></div>
			<div class="card-desc">
				<div class="card-title">Качество</div>
				<p>
					Футболки сделаны из 100% хлопка.
					Печать выполнена на передовом оборудовании,
					что гарантирует качество и стойкость рисунка.
				</p>
			</div>
		</div>
		<div class="card">
			<div class="card-image style-form-card"></div>
			<div class="card-desc">
				<div class="card-title">Крой</div>
				<p>
					Футболки отвечают классическим модным трендам.
					Рукава оснащены манжетами, чтобы плотно облегать руку и дополнять образ.
				</p>
			</div>
		</div>
		<div>
			<a href="#order" class="go-to-purchase">Получить скидку</a>
		</div>
	</div>

	<div class="section">
		<div class="slide" id="slide1">
			<h1 class="title">Как создаются футболки</h1>
			<div class="process">
				<div class="process-icon">
					<img src="img/480x700_2.jpg">
				</div>
				<div class="process-desc">
					<h2>Создание концепции</h2>
					<p>
						Перед созданием новой идеи представляем конечный результат.
						Футболка - способ самовыражения сторонников видения команды.
						На этом этапе мы рисуем первые эскизы и скетчи, закладываем в работу посыл.
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide2">
			<h1 class="title">Как создаются футболки</h1>
			<div class="process">
				<div class="process-icon">
					<img src="img/480x700_3.jpg">
				</div>
				<div class="process-desc">
					<h2>Создание принта</h2>
					<p>
						В ходе обсуждений и правок появляется образ будущего изображения.
						Если эскизы отражают концепцию работы, то они дорабатываются и улучшаются.
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide3">
			<h1 class="title">Как создаются футболки</h1>
			<div class="process">
				<div class="process-icon">
					<img src="img/480x700_4.jpg">
				</div>
				<div class="process-desc">
					<h2>Выбор формы и кроя</h2>
					<p>
						Работа над видом футболки. Здесь решается,
						какие элементы стоит добавить или изменить в стандартном крое для создания образа.
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide4">
			<h1 class="title">Как создаются футболки</h1>
			<div class="process">
				<div class="process-icon">
					<img src="img/480x700_5.jpg">
				</div>
				<div class="process-desc">
					<h2>Доведение до результата</h2>
					<p>
						Финальный концепт и принт отправляются на фабрику!
						Мы следим за тем, чтобы футболки соответствовали идее и стандартам качества.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<p class="title">Доставка в пределах Москвы и МО</p>
		<p>
			<a href="#order" class="purchase-btn mt-60">Получить футболку уже сегодня</a>
		</p>
	</div>

	<div class="section">
		<p class="title">Оформите заказ за 30 секунд</p>
		<form onsubmit="return false;">
			<div id="form-success">Спасибо! Ваш заказ оформлен!</div>
			<div id="form-error"></div>

			<div class="form-content">
				<div class="left">
					<div class="form-field-content name">
						<input id="name" class="form-field"
						       type="text" required placeholder="Ваше имя">
					</div>
					
					<div class="form-field-content phone">
						<input id="phone" class="form-field"
						       type="tel" required
						       pattern="\+[7] [(]\d{3}[)] \d{3}-\d{2}-\d{2}"
						       placeholder="+7 (495) 123-45-67">
					</div>
					
					<div class="form-field-content email">
						<input id="email" class="form-field"
						       type="email" pattern=".*@.*\..*"
						       placeholder="E-mail адрес">
					</div>
				</div>

				<div class="right">
					<div class="form-field-content form-toggle">
						<label class="form-label" for="delivery">Вам нужна доставка?</label>
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="delivery">
							<label class="onoffswitch-label" for="delivery">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
					
					<div class="form-optional">
						<div class="form-field-content">
							<input id="date" class="form-field"
							       type="text" pattern="\d{2}\.\d{2}\.\d{4} \d{2}:\d{2}"
							       placeholder="Выберите время доставки">
						</div>
						
						<div class="form-field-content">
							<input id="address" class="form-field"
							       type="text" placeholder="Адрес доставки">
						</div>
					</div>
				</div>

				<div class="bottom">
					<div class="form-field-content message">
						<textarea id="message" class="form-field" rows="3" placeholder="Оставьте свой комментарий"></textarea>
					</div>
					
					<div class="form-field-content form-submit">
						<input type="submit" value="Отправить">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<link rel="stylesheet" href="/min/?f=css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.8.1/jquery.fullPage.min.css">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="/min/?b=js&amp;f=animation.js,form.js"></script>
<script>
	$(document).ready(function () {
		$('#fullpage').fullpage({
			anchors: ['main', 'profits', 'process', 'delivery', 'order'],
			menu: '#menu',  
			animateAnchor: false
		});
	});
</script>

</body>
</html>
<?php
	/*
	* HTML-минимизация
	*/
	$out = ob_get_clean();
	$out = preg_replace('/(?![^<]*<\/pre>)[\n\r\t]+/', "\n", $out);
	$out = preg_replace('/ {2,}/', ' ', $out);
	$out = preg_replace('/>[\n]+/', '>', $out);
	file_put_contents('index.html', $out);
?>

