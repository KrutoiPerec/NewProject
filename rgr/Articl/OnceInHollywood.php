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
        <?php else: $_SESSION['film'] = 'OnceInHollywood'; ?>
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

        <img src="../Once_Upon_a_Time_in_Hollywood_i01.jpg" id="rev_img">
        <div class="rev_text">
        <p class="Text">
        <p class="Text">Вот и я попал на премьеру Квентина Тарантино 'Однажды в Голливуде'. Это кино я не мог пропустить, ибо в нём снимается мой любимый актёр Леонардо Ди Каприо, и, не менее уважаемый мною, Брэд Питт. Пишу рецензию вот прям буквально выйдя из кинозала.</p>
        <br>
        <p class="Text">Сразу скажу, что фильм очень своеобразный. Во-первых, потому что это Тарантино. Во-вторых, чтобы проникнуться и всё понять, надо реально разбираться и знать о кинематографе 60-х, об образе жизни 60-х. Если ты ни в первом, ни во втором не разбираешься, фильм может показаться откровенным шлаком.</p>
        <br>
        <p class="Text">В целом, смотря данное кино, понимаешь, что это достаточно качественный продукт, даже если местами что-то не понятно. Честно скажу, шестидесятыми годами я до этого не больно интересовался, поэтому некоторые отрезки фильма были скучноватыми для меня, некоторые отсылки не понимаешь. Вообще, кино очень размеренное. Нельзя сказать, что оно конкретно о чём-то, о какой-то конкретной истории, несмотря на то, что есть некий Рик Далтон, вроде как главный персонаж. Это просто такая вот общая история из жизни нескольких людей, просто какой-то отрезок времени 60-70-х годов со своим стилем, юмором, атмосферой, колоритом. Возможно потому что это просто повествование, по сути, без какого-либо логического конца, середина фильма может показаться кому-то затянутой, скучноватой, местами бессмысленной.</p>
        <br>
        <p class="Text">Актёры. Леонардо Ди Каприо, да хорош. Как обычно хорош. Его участие в фильме - это почти гарантированный успех картине. Настолько Лео авторитетен в мире киноиндустрии, и не за красивые глаза, а за своё мастерство на актёрском поприще. Брэд Питт - актёр, который, по моему мнению, так же заслужил давно оскар, и которого, как в своё время и Лео, полностью обходит стороной данная награда. Марго Робби мне начинает нравиться всё больше и больше, как актриса, как образ, как человек. Её роль здесь не менее важна, и я не просто так дал заголовок данной рецензии 'Памяти Шэрон Тейт'.</p>
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
            $Film = "OnceInHollywood";
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
