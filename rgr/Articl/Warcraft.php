<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="ru">
<head>
    
    <link rel='stylesheet' href="style.css">
    <title>Movie-Movie.kz</title>
    <div class='Top'>
    <a href="../index.php"><p class="Title">Movie - <span style="color: rgb(240, 229, 229)">Movie.kz</span></p></a>
        <?php
        session_start();
        if(!isset($_SESSION["session_username"])):
          ?>
          <a href="../reg/registration.html"> <div class="Button_Reg"> <p class="reg1">Регистрация</p> </div> </a>
          <a href="../autorication/Auto.html"><div class="Button_Entr"><p class="reg" >Вход</p></div></a>
        <?php else: $_SESSION['film'] = 'Warcraft'; ?>
          <div class="Auto">
            <a href="../php/logout.php"><img class="AutoImg" src="user_icon.png"></a>
            <p class="AutoName"> <?php echo $_SESSION['session_username'] ?>  </p>
          </div>
        <?php endif; ?>
        <br><br><br>
        <br><br><br>
        <div class="Themes" id="theme1">
        <h3>Статьи/Новости</h3>
    </div>
    </div>
    
</head>
<body>
    <div class="Centre">

        <img src="../warcraft.jpg" id="rev_img">
        <div class="rev_text">
        <p class="Text">После первого трейлера, сделанного очень качественно и красиво, хотелось поскорее посмотреть весь фильм, снятый по легендарной игре. Но опасение было одно: так как никогда не играл в World Of Warcraft боялся просто напросто ничего не понять и весь фильм сидеть в полном недоумении. Но такого не произошло — фильм сняли как и для фанатов, так и для обычных зрителей, что является огромным плюсом, потому что кино действительно получилось отличное.</p>
        <br>
        <p class="Text">Если о сюжете, то тут все достаточно просто: раса орков стоит на грани вымирания, и, чтобы спасти свой народ, вождь приводит орду к чернокнижнику Гулдану, который с помощью черной магии (Скверны) открывает портал в мир людей с целью его захватить для дальнейшего переселения своего народа.</p>
        <br>
        <p class="Text">Первым, что я отметил — невероятное качество графики: орки и их мир выглядят потрясающе, иногда хочется поставить кино на паузу и просто повнимательнее изучить героев и окружающий их мир. Видно на что ушел такой громадный бюджет. Персонажи очень проработаны, наконец, орков показали не только как истинное воплощение зла и агрессии, здесь у них тоже есть свой кодекс чести.</p>
        <br>
        <p class="Text">Фильм явно конкурирует с Властелином Колец и, стоит признать, несильно уступает, если и уступает вообще. Отдельной похвалы заслуживает сюжет, а именно его простота для обычного зрителя. Диалоги построены так, что легко войти в курс дела.</p>
        <br>
        <p class="Text">Варкрафт — это очень сильный фильм в жанре фэнтези, очень интересный, атмосферный, с иногда относительно непредсказуемыми поворотами в сюжете.</p>
        <br>
        <p class="Text">9 из 10</p>
        </div>
        <figure class="logos">
            <a href="https://www.instagram.com/mirov_rana/"><img src="inst_logo.png" id="inst_logo"></a>
            <a href="https://vk.com/inmw8miracle"><img src="vk_logo.png" id="vk_logo"></a>
        </figure>
       <form action="../php/Kom.php" method="post" >
        <div class="Commentary">
        <h4>Комментарии</h4>
               <img  src="user_icon.png" class="Kom">
               <textarea name="TextArea" class="AreaKom"></textarea>
               <div>
                <button name="button" type="submit" class="KomButton">Отправить</button>
                </div>
        </form>
                
        </div>
        <div class="Kommm">
        <?php
        $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = 'A1i2s3u4l5', $database = 'movie');
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка" . mysqli_error($link));
            $Film = $_SESSION['film'];
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
</body>
</html>
