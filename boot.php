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
	<meta name="description" content="Landing page for selling cool, high quality printed T-Shirts">
	<meta name="keywords" content="стильные футболки, футболка, футболки, футболки с принтом">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="vendor/css/jquery.fullPage.css">
	<link rel="stylesheet"
	      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
</head>

<body>
<div class="full-background">
    <img src="img/bg1.jpg" alt="">
    <img src="img/bg2.jpg" alt="">
    <img src="img/bg3.jpg" alt="">
    <img src="img/bg4.jpg" alt="">
    <img src="img/bg5.jpg" alt="">
</div>

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
		<form id="order-purchase">
			<div id="form-success"></div>

			<div class="form-content">
				<div class="form-field-content">
					<label for="name" class="form-label">Name:</label>
					<input id="name" class="form-field"
					       type="text" required placeholder="Name">
				</div>

				<div class="form-field-content">
					<label for="phone" class="form-label">Phone:</label>
					<input id="phone" class="form-field"
					       type="tel" required
					       pattern="\+[7] [(]\d{3}[)] \d{3}-\d{2}-\d{2}"
					       placeholder="+7 (495) 123-45-67">
				</div>

				<div class="form-field-content">
					<label for="email" class="form-label">EMail:</label>
					<input id="email" class="form-field"
					       type="email" pattern=".*@.*\..*"
					       placeholder="EMail">
				</div>

				<div class="form-field-content form-toggle">
					<label class="form-label">Delivery?
						<input id="delivery" type="checkbox" class="form-field">
					</label>
				</div>

				<div class="form-optional">
					<div class="form-field-content">
						<label for="date" class="form-label">Date:</label>
						<input id="date" class="form-field"
						       type="text" pattern="\d{2}\.\d{2}\.\d{4} \d{2}:\d{2}"
						       placeholder="Date and Time">
					</div>

					<div class="form-field-content">
						<label for="address" class="form-label">Address:</label>
						<input id="address" class="form-field"
						       type="text" placeholder="Address">
					</div>
				</div>

                <div class="form-field-content">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" class="form-field"></textarea>
                </div>

				<div class="form-field-content form-submit">
					<button type="submit">Send</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/form.js"></script>
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
