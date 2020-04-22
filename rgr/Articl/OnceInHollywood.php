<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="ru">
<head>
    
    <link rel='stylesheet' href="style.css">
    <title>Movie-Movie.kz</title>
    <div class='Top'>
        <p class="Title">Movie - <span style="color: rgb(240, 229, 229)">Movie.kz</span></p>
        <?php
        session_start();
        if(!isset($_SESSION["session_username"])):
          ?>
          <a href="../reg/registration.html"> <div class="Button_Reg"> <p class="reg1">Регистрация</p> </div> </a>
          <a href="../autorication/Auto.html"><div class="Button_Entr"><p class="reg" >Вход</p></div></a>
        <?php else: $_SESSION['film'] = 'SuicideSquad'; ?>
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

        <img src="../img/4.jpg" id="rev_img">
        <div class="rev_text">
        <p class="Text">
            <p class="Text">Фильм, который всеми фибрами души говорит, что он крутой, только это совершенно не так. А к тому моменту, когда ты его досмотришь до конца понимаешь, насколько он сильно плох в тех моментах, где он должен был выстреливать.</p>
            <br>
            <p class="Text">(Без спойлеров)</p>
            <br>
            <p class="Text">Причина, по которой 'правительство города' разрешило выпустить главных героев из тюрьмы - пустая. Ее по сути и нету. Показали как честный, не заключенный и не совершающих убийств человек может контролировать свои способности, и поэтому они смогут контролировать одних из самых опасных преступников города. Эта сцена убьет каждого. Но только потом нам показывают, каким образом они их берут под контроль.</p>
            <br>
            <p class="Text">Джокер - убог не представляет из себя кого-то опасного. Он абсурден, и это даже не из-за глупости. Он переигрывает. Каждый раз когда когда его демонстрировали он был безумным шарлатаном и вызывал только чувство отвращения. И скорее всего, его персонажа не только Джаред погубил, но еще и СЦЕНАРИЙ!. А это, самое худшее в фильме.</p>
            <br>
            <p class="Text">Диалоги - глупые фразы с псевдо 'крутой' подачей. Не основные диалоги, а второстепенные и короткие. Они максимально бессмысленные. А это практически с самого начала фильма. Фильм как бы давал понять, что у героев есть что-то общее. Они солидарны друг к другу и могут выполнить свою общую миссию. Только вот диалоги разрушают эту идею. И это не проблемы дубляжа. Тоже самое наблюдалось и в оригинале. У персонажей нету никакой мимики в диалогах. Им наплевать друг на друга, но при этому они продолжают идти за своей целью. Уилл Смит в этом плане разочаровал. Зато Марго Робби удивила. Актерская игра не завлекла, но порадовала.</p>
            <br>
            <p class="Text">Графика, операторская работа и звуковое сопровождение по-настоящему на высшем уровне. А особенно неплохая работа над гримом, за что фильм и наградили оскаром.</p>
            <br>
            <p class="Text">Фильм не выстрелил и по моему мнению вся проблема в сценарии.</p>
        </p>
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
