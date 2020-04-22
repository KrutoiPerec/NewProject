<?php
        require_once 'connection.php';
        session_start();
        $Text = $_POST['TextArea'];
        $Name = $_SESSION['session_username'];
        $Film = $_SESSION['film'];
        $result = mysqli_query($connection, "INSERT INTO com (`Name`, `Text`, `Film`)
        VALUES ('$Name', '$Text', '$Film')");
            if($result)
            {
                echo"<script type='text/javascript'>alert('Успешно'); window.location.href='../Articl/$Film.php';</script>";
            }
            else
            {
                echo $Name." ".$Text." ".$Film." ";
                echo "ошибка";
            }

?>