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

        <img src="DJ.jpg" id="rev_img">
        <div class="rev_text">
        <p class="Text">
        <p class="Text">Если в фильме кто-то что-то интересно рассказывает, если саундтрек хорош, диалоги пестрят сленгом, а от костюмов и локаций хочется плакать от счастья, то это Ричи. Ах, да! Ещё обязательно должны быть русские олигархи или мафия, если, конечно, история криминальная, а не про джина из лампы.</p>
        <br>
        <p class="Text">Джентльмены.</p>
        <br>
        <p class="Text">С первого кадра ты вдыхаешь запах шерсти, сырости после дождя, алкоголя и пота. Как и всегда кадр радует глаз – свет, цветовая палитра, геометрия кадра, как всегда на высоте. Локации шикарны и детальны, так как это не просто фон – это картина, выбранная со вкусом, так как должна подходить под персонажей, диалоги и ситуацию.</p>
        <br>
        <p class="Text">Манера повествования всё также с зигзагами, где прошлое пересекается с настоящим и дает пищу для размышления на будущее. Но, динамика уже снизилась, кадр уже не меняется так стремительно как раньше. Ричи стал более степенным или это было продиктовано сюжетом? Сказать однозначно довольно сложно. Показаны и высшая прослойка со всей своей нелепой помпезностью и мнимой важностью, и грязная гопота и бандюганы с пистолетами. Вроде бы ничего нового, но сделано всё это, как и всегда качественно.</p>
        <br>
        <p class="Text">Простая отработанная схема, где все вертится вокруг одной группы людей – мужское братство и один сильный и яркий женский персонаж. Некоторые возмущаются, что Ричи и Тарантино не любят женщин и в их фильмах мало женских персонажей. Но! Важно не количество, а качество. В плане качества женские персонажи настолько выигрышные, что не только не теряются в толпе мужчин, нет, они равны.</p>
        <br>
        <p class="Text">Дифирамбы в сторону Гая Ричи я могу петь долго. Да, иногда случаются промахи, но их можно простить совершенно спокойной.</p>
        <br>
        <p class="Text">Фильмы Ричи – услада глаз и ушей моих.</p>
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
            $Film = "DJ";
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
