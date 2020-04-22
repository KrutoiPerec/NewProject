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
        <a href="index.php"><p class="Title">Movie - <span style="color: rgb(240, 229, 229)">Movie.kz</span></p></a>
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
        <a href="#news_block" id="theme1">Статьи</a>
        <a href="#news_block" id="theme2">Новости</a>
        <a href="treilers/OnceInHolywoodTR.php" id="theme3">Трейлеры</a>
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
                  <a href="Articl/OnceInHollywood.php"><img src="Once_Upon_a_Time_in_Hollywood_i01.jpg" id="slide_img"></a>
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                  <a href="Articl/Warcraft.php"><img src="warcraft.jpg" id="slide_img"></a>
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                    <a href="Articl/DJ.php"><img src="DJ.jpg" id="slide_img"></a>
                  </figure>
                </li>
                <li class="slide">
                  <figure>
                  <a href="Articl/Spider.php"><img src="Spider.jpg" id="slide_img"></a>
                  </figure>
                </li>
              </ul>
            </div>
          </div>
      <div class="news_block" id="news_block">
          <div class="news" id="news1"><a href="Articl/SuicideSquad.php" ><img src="img/1.jpg" class="news_image"><p class="news_decr">Правительство решает дать команде суперзлодеев шанс на искупление. Подвох в том, что их отправляют на миссию, где они, вероятнее всего, погибнут.</p></a></div>
          <div class="news" id="news2"><a href="Articl/OnceInHollywood.php" ><img src="Once_Upon_a_Time_in_Hollywood_i01.jpg" class="news_image"><p class="news_decr">  Фильм повествует о череде событий, произошедших в Голливуде в 1969 году, на закате его «золотого века». По сюжету, известный ТВ актер Рик Далтон и его дублер Клифф Бут пытаются найти свое место в стремительно меняющемся мире киноиндустрии.</p></a></div>
          <div class="news" id="news3"><a href="Articl/DJ.php"><img src="DJ.jpg" class="news_image" ><p class="news_decr">  Готэм, начало 1980-х годов. Комик Артур Флек живет с больной матерью, которая с детства учит его «ходить с улыбкой». Пытаясь нести в мир хорошее и дарить людям радость, Артур сталкивается с человеческой жестокостью и постепенно приходит к выводу, что этот мир получит от него не добрую улыбку, а ухмы…</p></a></div>
          <div class="news" id="news4"><a href="Articl/Warcraft.php" ><img src="img/4.jpg" class="news_image"><p class="news_decr">  Веками магия и неприступные стены защищали людей от любых напастей. Но древнее зло, побежденное и забытое тысячелетия назад, пробудилось.</p></a></div>
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
    