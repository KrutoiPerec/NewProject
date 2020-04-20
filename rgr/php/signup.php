<?php

    require_once 'connection.php';
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_passwd = $_POST['user_password'];


    $ids_array = array();
    $names = mysqli_query($connection ,"SELECT Name FROM users");
    while($row = mysqli_fetch_array($names))
    {
        $ids_array[] = $row['Name'];
    }

    foreach ($ids_array as $name) {
        if($user_name == $name)
        {
            echo"<script type='text/javascript'>alert('Пользователь уже существует'); window.location.href='../reg/registration.html';</script>";
            die();
        }
    }

    $result = mysqli_query($connection, "INSERT INTO users (`Name`, `Mail`, `Password`)
    VALUES ('$user_name', '$user_mail' , '$user_passwd')");
            if($result)
            {
                echo"<script type='text/javascript'>alert('Успешно'); window.location.href='../index.php';</script>";
            }
            else
            {
                echo $user_name,$user_mail,$user_passwd;
                echo "ошибка";
            }

            ?>