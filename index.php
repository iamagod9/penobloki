<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Пенобетонные блоки купить</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="header container">
				<div class="slog_sr">
					<img class="logo" src="img/logo.png">
				</div>

				<div class="serch_header">
					<input class="search_block" type="search" name="text" placeholder="Поиск" size="20" maxlength="50" autocomplete="off">
				</div>

				<div class="connect_with_company">
					<img class="icons_telephone" src="img/icons-telephone-call.png">
					<p class="number_telephone">+7 (985) 234 53 23</p>
				</div>

				<div class="connect_with_company">
					<img class="icons_reg" src="img/locked.png">
					<? echo !isset($_COOKIE['id']) ? "<a class='log_in' href='login.php'>Вход</a>" : "<a class='log_in' href='logout.php'>Выйти</a>"; ?>
					<!-- <a class="log_in" href="login.php">Вход</a> -->
				</div>
			</div>

			<div class="menu_header">
				<div class="menu_block">
					<a class="menu_items" href="index.php">Главная</a> 
				</div>

				<div class="menu_block">
					<a class="menu_items" href="sale.php">Акции</a> 
				</div>

				<div class="menu_block">
					<a class="menu_items" href="contact.php">Контакты</a> 
				</div>

				<div class="menu_block">
					<a class="menu_items" href="#">Отзывы</a> 
				</div>
			</div>
		</header>
		
		<div class="name_of_blocks_border">
			<h2 class="name_of_blocks">Пенобетонные блоки</h2>
		</div>

		<content>
			<div class="line_content">
				<div class="filters_menu">
					<h1 class="filter_parametr">Фильтр по параметрам</h1>
						<div class="blocks_filters">
							<a class="filter_items" href="#">Цена</a>
						</div>

						<div class="blocks_filters">
							<a class="filter_items" href="#">Бренд</a>
						</div>

						<div class="blocks_filters">
							<a class="filter_items" href="#">Страна</a>
						</div>

						<div class="blocks_filters">
							<a class="filter_items" href="#">Количество на поддоне, шт.</a>
						</div>

						<div class="blocks_filters">
							<a class="filter_items" href="#">Количество на поддоне, м3</a>
						</div>

						<div class="but_block">
							<input class="show_but" type="button" name="#" data-href value="Показать">
							<input class="reset_but" type="button" name="#" data-href value="Сбросить">
						</div>
				</div>		

				<div class="news_tab">
					<div class="news_top">
						<h2 class="news_zag">Отзывы</h2>
						<a class="all_news" href="#">Все отзывы</a>
					</div>

					<div class="news_info">
						<p class="date_news">4 Декабря 2020</p>
						<p class="text_news">Создание веб-сайта "Нирвана"</p>
					</div>
				</div>

				<div class="stats_tab">
					<div class="stats_top">
						<h2 class="stats_zag">Статьи</h2>
						<a class="all_stats" href="#">Все статьи</a>
					</div>

					<div class="stats_info">
						<p class="date_stats">7 Декабря 2020</p>
						<p class="text_stats">Достоинства и недостатки пенобетонных блоков</p>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*80*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*75*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*150*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*100*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img_white" src="img/penoblock2.png">
					<p class="text_pb">Пенобетонный блок NOVOBLOCK D500 625*80*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img_white" src="img/penoblock2.png">
					<p class="text_pb">Пенобетонный блок NOVOBLOCK D500 625*75*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<button>
					<button class="content_but" name="#">Заказать</button>
				</div>

				<div class="content_blocks">
					<img class="pb_img_white" src="img/penoblock2.png">
					<p class="text_pb">Пенобетонный блок NOVOBLOCK D500 625*150*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>

				<div class="content_blocks">
					<img class="pb_img_white" src="img/penoblock2.png">
					<p class="text_pb">Пенобетонный блок NOVOBLOCK D500 625*100*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*125*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*200*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*60*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>

				<div class="content_blocks">
					<img class="pb_img" src="img/penoblock1.png">
					<p class="text_pb">Пенобетонный блок ВКБЛОК D500<br> 625*90*250</p>
					<p class="summa_pb">Цена: 3 800 руб./м3</p>
					<input class="content_but" type="button" name="#" data-href value="Заказать">
				</div>
			</div>
		</content>

		<div class="footer ">
			<div class="footer_block container">
				<div class="footer_block_content_top">
					<div class="footer_block_one">
						<a class="zag_parametr_footer" href="#">О компании</a>
						<a class="parametr_footer" href="#">Отзывы</a>
						<a class="parametr_footer" href="#">О магазине</a>
					</div>

					<div class="footer_block_one">
						<a class="zag_parametr_footer" href="#">Каталог</a>
						<a class="parametr_footer" href="#">Бренды</a>
						<a class="parametr_footer" href="#">Акции</a>
						<a class="parametr_footer" href="#">Контакты</a>
					</div>

					<div class="footer_block_one">
						<a class="zag_parametr_footer" href="#">Помощь</a>
						<a class="parametr_footer" href="#">Оплата</a>
						<a class="parametr_footer" href="#">Доставка</a>
						<a class="parametr_footer" href="#">Самовывоз</a>
						<a class="parametr_footer" href="#">Политика</a>
					</div>

					<div class="footer_block_contact">
						<p class="ours_contact">Наши контакты</p>
						<a class="block_contact" href="#"><img class="icons_footer" src="img/icons_telephone.png"> +7 (985) 234 53 23</a>
						<a class="block_contact" href="#"><img class="icons_footer" src="img/message.png"> nirvana_brat@mail.ru</a>
						<p class="block_contact"><img class="icons_footer" src="img/geo.png">401000, г.Кемерово, ул Павленко 1А</p>
					</div>
				</div>

				<!-- <hr align="center" width="100%" size="1px" color="#555"> -->

				<div class="footer_block_content_bottom">
					<p class="copyright">2020 © Нирвана-всему голова,брат</p>
					<p class="text_footer_bottom">SHELEPOVERT - продвижение сайта по трафику.</p>
					<p class="text_footer_bottom"> Разработка интернет-магазина - Студия Varlasha</p>
				</div>
			</div>
		</div>

		<script src="js/script.js"></script>
	</body>
</html>