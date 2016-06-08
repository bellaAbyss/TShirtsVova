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
	<link type="text/css" rel="stylesheet" href="/min/?f=css/style.css" />
	<link type="text/css" rel="stylesheet" href="/min/?f=vendor/css/jquery.fullPage.css" />
	<link rel="stylesheet"
	      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<div class="full-background">
    <img src="img/bg1.jpg" alt="">
    <img src="img/bg2.jpg" alt="">
    <img src="img/bg3.jpg" alt="">
    <img src="img/bg4.jpg" alt="">
    <img src="img/bg5.jpg" alt="">
</div>
<div class="vignette"></div>

<ul id="menu">
	<li data-menuanchor="first" class="active"><a href="#first">Главная</a></li>
	<li data-menuanchor="second"><a href="#second">Слайд 2</a></li>
	<li data-menuanchor="third"><a href="#third">Слайд 3</a></li>
	<li data-menuanchor="fourth"><a href="#fourth">Слайд 4</a></li>
	<li data-menuanchor="fifth"><a href="#fifth">Заказать</a></li>
</ul>

<div id="fullpage">
	<div class="section" id="section0">
		<p class="title">
			Стильная футболка с уникальным дизайном за 10 минут
		</p>
		<a href="#fifth" class="purchase-btn mt-60">Оформить заказ и получить скидку 5%</a>
	</div>

	<div class="section" id="section1">
		<p class="title">
			Почему выбирать футболку &lt;NAME&gt;
		</p>
		<div class="card mt-40">
			<div class="image unique-design-card"></div>
			<div class="card-desc">
				<div class="card-title">Уникальный дизайн</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur corporis, dicta ea eum
					eveniet laborum maxime modi mollitia, quia quibusdam quis quos reprehenderit sapiente sit soluta
					unde veniam veritatis!
				</p>
			</div>
		</div>
		<div class="card mt-40">
			<div class="image high-quality-card"></div>
			<div class="card-desc">
				<div class="card-title">Высокое качество</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, adipisci asperiores
					consectetur dicta doloribus eum hic inventore nesciunt quibusdam. Consequuntur esse fugiat illum
					iure optio pariatur ut voluptate voluptatem.
				</p>
			</div>
		</div>
		<div class="card mt-40">
			<div class="image style-form-card"></div>
			<div class="card-desc">
				<div class="card-title">Стильный крой</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, doloribus eius excepturi quaerat
					ratione sint. Aliquam at distinctio error et facere harum maxime nesciunt suscipit ut veniam!
					Consequuntur, explicabo, qui.
				</p>
			</div>
		</div>
		<a href="#fifth" class="backToPurchasingBtn">Оформить заказ</a>
	</div>

	<div class="section" id="section2">
		<div class="slide" id="slide1">
			<h1 class="title">Процесс создания футболок &lt;NAME&gt;</h1>
			<div class="process">
				<div class="process-icon">
					<img src="http://img.allw.mn/content/www/2011/04/8-fun-printed-t-shirts/1_jersey-shore-situation-tee_8-fun-printed-t-shirts.jpg">
				</div>
				<div class="process-desc">
					<h2>Собираем хлопок</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut autem cupiditate
						delectus doloremque est eum explicabo, fugit hic illum ipsa minus modi mollitia odit quaerat
						quasi quibusdam quo ullam!
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide2">
			<h1 class="title">Процесс создания футболок &lt;NAME&gt;</h1>
			<div class="process">
				<div class="process-icon">
					<img src="http://images.kooves.com/uploads/products/50262_86e32eb5d893d09a93501cf01d56bc85_image1_default.jpg">
				</div>
				<div class="process-desc">
					<h2>Синтезируем краски</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at consequatur in laudantium optio
						temporibus voluptatibus! Assumenda culpa debitis explicabo fugiat obcaecati placeat quisquam rem
						totam. Blanditiis illo incidunt nobis.
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide3">
			<h1 class="title">Процесс создания футболок &lt;NAME&gt;</h1>
			<div class="process">
				<div class="process-icon">
					<img src="http://hideyourarms.com/wp-content/uploads/2014/01/4_akimski_1.jpg">
				</div>
				<div class="process-desc">
					<h2>Шьем футболку</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur dolore fugiat
						hic in incidunt obcaecati officia quis quo voluptates! Alias beatae doloribus iure magnam,
						numquam quam repellat. Error, repellendus.
					</p>
				</div>
			</div>
		</div>

		<div class="slide" id="slide4">
			<h1 class="title">Процесс создания футболок &lt;NAME&gt;</h1>
			<div class="process">
				<div class="process-icon">
					<img src="img/bg2.jpg">
				</div>
				<div class="process-desc">
					<h2>Делаем принт</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias at commodi debitis earum eius
						est eveniet, ex impedit laboriosam maxime necessitatibus optio perferendis rem rerum saepe ut,
						velit vero?
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="section3">
		<p class="title">Доставка в пределах Москвы и МО</p>
		<p>
			<a href="#fifth" class="purchase-btn mt-60">Получить скидку</a>
		</p>
	</div>

	<div class="section" id="section4">
		<p class="title">Оформление заказа</p>
		<form>
			<div id="form-success"></div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="/min/?b=js&amp;f=animation.js,form.js"></script>
<script>
	$(document).ready(function () {
		$('#fullpage').fullpage({
			anchors: ['first', 'second', 'third', 'fourth', 'fifth'],
			menu: '#menu',
			css3: false,
			scrollingSpeed: 2000,
			loopTop: true,
			loopBottom: true
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

