<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="ru">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="style.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.glide.min.js"></script>   
    <title>Movie-Movie.kz</title>
    <div class='Top'>
        <p class="Title">Movie - <span style="color: rgb(240, 229, 229)">Movie.kz</span></p>
        <!--<a href="reg\registration.html" ><img src="user_icon.png" id="icon"><p id="user_name">NickName</p></a>-->
        <?php
        session_start();
        if(!isset($_SESSION["session_username"])):
          ?>
          <a href="reg/registration.html"> <div class="Button_Reg"> <p>Регистрация</p> </div> </a>
          <a href="autorication/Auto.html"><div class="Button_Entr"><p >Вход</p></div></a>
        <?php else: ?>
          <div class="Auto">
            <a href="php/logout.php"><img class="AutoImg" src="user_icon.png"></a>
            <p class="AutoName"> <?php echo $_SESSION['session_username'] ?>  </p>
          </div>
        <?php endif; ?>
        <br><br><br>
        <div class="Themes">
        <a href="reg\index.html" id="theme1">Статьи</a>
        <a href="reg\index.html" id="theme2">Новости</a>
        <a href="reg\index.html" id="theme3">Трейлеры</a>
    </div>
    </div>
    
</head>
<body>
    <div class="Centre">
        <div id="w">
            <br><br><br><br><br><br>
            <div class="slider">
              <ul class="slides">
                <li class="slide">
                  <figure>
                    <a href="Articl/SuicideSquad.php"><img src="img/news.jpg" id="slide_img"></a>
                  </figure>             
                </li>
                <li class="slide">
                  <figure>
                    <img src="img/news.jpg" id="slide_img">
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                    <img src="img/news.jpg" id="slide_img">
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                    <img src="img/news.jpg" id="slide_img">
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                    <img src="img/5.jpg" id="slide_img">
                  </figure>
                </li>
              </ul>
            </div>
          </div>
      <div class="news_block">
          <div class="news" id="news1"><img src="img/1.jpg" class="news_image"><p class="news_decr">Правительство решает дать команде суперзлодеев шанс на искупление. Подвох в том, что их отправляют на миссию, где они, вероятнее всего, погибнут.</p></div>
          <div class="news" id="news2"><img src="img/2.jpg" class="news_image"><p class="news_decr">  Переведено с английского языка.-«Бхарат» - это драматический фильм индийского языка на хинди 2019 года, написанный и режиссер Али Аббас Зафар. Это совместно произведено Атулом Агнихотри, Альвирой Ханом Агнихотри, Бхушаном Кумаром, Кришаном Кумаром, Нихилом Намитом и Салманом Ханом под лозунгами Reel Life Productions, Salman Khan Films и T-Series</p></div>
          <div class="news" id="news3"><img src="img/3.jpg" class="news_image"><p class="news_decr">  Готэм, начало 1980-х годов. Комик Артур Флек живет с больной матерью, которая с детства учит его «ходить с улыбкой». Пытаясь нести в мир хорошее и дарить людям радость, Артур сталкивается с человеческой жестокостью и постепенно приходит к выводу, что этот мир получит от него не добрую улыбку, а ухмы…</p></div>
          <div class="news" id="news4"><img src="img/4.jpg" class="news_image"><p class="news_decr">  Веками магия и неприступные стены защищали людей от любых напастей. Но древнее зло, побежденное и забытое тысячелетия назад, пробудилось.</p></div>
      </div>  
      
    <div class="Bot"> 
    <figure class="logos1">
      <a href="https://www.instagram.com/mirov_rana/"><img src="inst_logo.png" id="inst_logo"></a>
      <a href="https://vk.com/inmw8miracle"><img src="vk_logo.png" id="vk_logo"></a>
    </figure>
    <figure class="logos">
      <a id="Prova_Zasicheni">© 2020,Movie-Movie.kz.</a>
      <a id="Prova_Zasicheni">Все права защищены</a>
    </figure>
    </div>
    </div>
  
</body>
<script type="text/javascript">
    $(function(){
      $('.slider').glide({
        autoplay: 1000000,
        hoverpause: true,
        arrowRightText: '&rarr;',
        arrowLeftText: '&larr;'
      });
    });
    </script>
    </html>
    