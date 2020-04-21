<?php
    session_start();
	unset($_SESSION['session_username']);
	session_destroy();
	echo"<script type='text/javascript'>alert('Успешно вышли'); window.location.href='../index.php';</script>";
	?>