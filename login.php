<link rel="stylesheet" href="css/stylephp.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?
	require_once 'connect.php';

	if (isset($_POST['submit'])) {
		// Вытаскиваем из БД запись, у которой логин равняется введенному
	    $query = mysqli_query($link, "SELECT * FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
	    $data = mysqli_fetch_assoc($query);

	    // Сравниваем пароли
	    if(password_verify($_POST['password'], $data['user_password'])) {

	        // Ставим куки 30 дней)
	        setcookie("id", $data['user_id'], time() + 2592000, "/");

	        // Переадресовываем браузер на страницу проверки нашего скрипта
	        header("Location: check.php"); 
	        exit();
	    } else {
	        print "Вы ввели неправильный логин/пароль";
	    }
	}
?>

<form method="POST">
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
			<a class="menu_items" href="#">Главная</a> 
		</div>

		<div class="menu_block">
			<a class="menu_items" href="#">Акции</a> 
		</div>

		<div class="menu_block">
			<a class="menu_items" href="#">Контакты</a> 
		</div>

		<div class="menu_block">
			<a class="menu_items" href="#">Отзывы</a> 
		</div>
	</div>

	<div class="name_of_blocks_border">
			<h2 class="name_of_blocks">Личный кабинет</h2>
	</div>
		
	<div class="form_reg">
		<div class="log-in">Логин<br> <input class="text-log" name="login" type="text" required><br></div>
		<div class="log-in">Пароль<br> <input class="text-log" name="password" type="password" required><br></div>
		<!-- <div class="registr">Нет аккаунта? <a class="zareg" href="register.php">Зарегистрироваться!</a><br></div> -->
		<div><input class="but_reg" name="submit" type="submit" value="Зарегистрироваться"></div>
	</div>

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
</form>