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
          <a href="../reg/registration.html"> <div class="Button_Reg"> <p>Регистрация</p> </div> </a>
          <a href="../autorication/Auto.html"><div class="Button_Entr"><p >Вход</p></div></a>
        <?php else: $_SESSION['film'] = 'OnceInHolywoodTR'; ?>
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
    <figure class="logos">
            <a href="https://www.instagram.com/mirov_rana/"><img src="inst_logo.png" id="inst_logo"></a>
            <a href="https://vk.com/inmw8miracle"><img src="vk_logo.png" id="vk_logo"></a>
    </figure>    
    <form action="../php/TR.php" method="post" >
        <div class="Commentary">
               <img  src="user_icon.png" class="Kom">
               <textarea name="TextArea" class="AreaKom"></textarea>
               <div>
                <button name="button" type="submit" class="KomButton">Отправить</button>
                </div>
        </form>    
        </div>
        <div class="Kommm">
        <?php
        $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'movie');
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка" . mysqli_error($link));
            $Film = "OnceInHolywoodTR";
            $query ="SELECT * FROM com  WHERE Film = '$Film' ";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            if($result)
            {
            $rows = mysqli_num_rows($result);
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result); ?>
                <div class="Out">
                    <img  src="user_icon.png" class="Kom">
                    <textarea class="AreaKomOut"> <?php echo $row[1]  ?> </textarea>
                    <div>
                    <h class="Name"> <?php echo $row[0]  ?></h>
                    </div>
                    <div>
                </div>
                </div>
                <?php
            
            }
                mysqli_free_result($result);
            }
                mysqli_close($link);


            ?>
        </div>
	
	</div>


</body>
</html>