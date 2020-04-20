<?php
    
    require_once 'connection.php';
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_passwd = $_POST['user_password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $result = mysqli_query($connection, "INSERT INTO users (`Name`, `Mail`, `Password`) 
    VALUES ('$user_name', '$user_mail' , '$hash')");
            if($result)
            {
                echo"<script type='text/javascript'>alert('Успешно'); window.location.href='../index.html';</script>";
            }
            else
            {
                echo "ошибка";
            } 
            ?>