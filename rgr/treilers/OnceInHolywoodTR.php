<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="ru">
<head>

	<title>Трейлеры</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="style.css"> 
    <a href="../index.php"><title>Movie-Movie.kz</title></a>
    <div class='Top'>
        <p class="Title">Movie - <span style="color: rgb(240, 229, 229)">Movie.kz</span></p>
        <?php
        session_start();
        if(!isset($_SESSION["session_username"])):
          ?>
          <a href="reg/registration.html"> <div class="Button_Reg"> <p>Регистрация</p> </div> </a>
          <a href="autorication/Auto.html"><div class="Button_Entr"><p >Вход</p></div></a>
        <?php else: ?>
          <div class="Auto">
            <a href="php/logout.php"><img class="AutoImg" src="user_icon.png"></a>
            <p class="AutoName">  <?php echo $_SESSION['session_username'] ?>  </p>
          </div>
        <?php endif; ?>

    </div>
</head>
<body>

	<div class="Centre">
		
		<div class="Movie_Info">
     <img src="https://www.kinopoisk.ru/images/film_big/1047883.jpg" class="Poster">
      <div class="Movie_desc"> 
        <p class="Info_title">Название</p>
        <p class="Info_title">год выпуска</p>
        <p class="Info_title">Жанр</p>
        <p class="Info_title">Страна </p>
        <p class="Info_title">Режисёр</p>
        <p class="Info_title">Время</p>
          <div class="Info_text_div">
            <p class="Info_text">Однажды в голивуде</p>
            <p class="Info_text">2019</p>
            <p class="Info_text">Комедия</p>
            <p class="Info_text">США</p>
            <p class="Info_text">Квентин Тарантино</p>
            <p class="Info_text">161. мин</p>
          </div>
      </div>
    </div>
    <div class="Treiler_div">
      <iframe width="1220" height="624" src="https://www.youtube.com/embed/zw81ihoukKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>





		<div class="Bot">
		</div>

	</div>


</body>
</html>