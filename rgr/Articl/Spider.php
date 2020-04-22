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
        <?php else: $_SESSION['film'] = 'DJ'; ?>
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

        <img src="Spider.jpg" id="rev_img">
        <div class="rev_text">
        <p class="Text">
        <p class="Text">'Человек-паук: Через вселенные' - это множество героев и злодеев, большое количество второстепенных персонажей, а плюсом идет стандартный хронометраж в два часа, из-за чего многим явно не будет хватать времени для раскрытия. На фоне вышеперечисленного я уже и не ожидал чего-то действительно стоящего от этого фильма. Что ж, я был приятно удивлён.</p>
        <br>
        <p class="Text">Качественный и оригинальный визуал, классная музыка, которую захочется послушать вновь отдельно от фильма - это всё на поверхности. Самое важное и ценное хранится внутри: хорошо прописанные 'живые' персонажи, лёгкий для восприятия сюжет, мягкий и нейтральный юмор - вкупе это создаёт картину, которая будет интересна для всех возрастов.</p>
        <br>
        <p class="Text">При своей ориентации на массового зрителя фильм не боится говорить на серьезные темы: дружба, моральное взросление, важность семьи, проблема отцов и детей, взаимоотношения учеников и их наставников. Хоть это и мультфильм про супергероев, на первом плане не экшен, а семья. 'Человек-паук: Через вселенные' - это картина про семью и её важную роль в жизни.</p>
        <br>
        <p class="Text">Думаю, отдельно стоит выразить благодарность авторам этого произведения. Они знали, о ком и о чём снимают. Каждый кадр наполнен деталями и отсылками. Казалось бы, совсем необязательно было продумывать и добавлять эти мелочи, но авторы отполировали каждую сцену так, чтобы даже придраться было сложно. Спасибо, что вы занялись в первую очередь творчеством, а не заработком. Также поблагодарить нужно студию 'Sony' за то, что они доверили этот проект нужным людям, профессионалам с горящими глазами.</p>
        <br>
        <p class="Text">'Человек-паук: Через вселенные' - это отличный выбор для просмотра в кругу семьи. Качественный и оригинальный продукт про супергероев, что с годами становится всё более редким явлением. Это фильм-аттракцион, на котором вы захотите прокатиться еще хотя бы раз на следующих выходных.</p>
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
        $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'movie');
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка" . mysqli_error($link));
            $Film = "Spider";
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
