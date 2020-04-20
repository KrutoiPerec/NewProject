<?php
	 require_once 'connection.php';
	 session_start();
	 $name = $_POST['user_name'];
	 $password = $_POST['user_password'];
	
	 $result = mysqli_query($connection ,"SELECT Password FROM users WHERE Name = '".$name."'");
	 if($result != NULL)
	 {
		while ($row = $result->fetch_assoc()) {
		if($row['Password'] == $password)
		{
			echo"<script type='text/javascript'>alert('Успешно вошли'); window.location.href='../index.php';</script>";
		}
		else
		{
			echo"<script type='text/javascript'>alert('Неверное имя или пароль'); window.location.href='../autorication/Auto.html';</script>";
		}
		}
		
	 }
	 else
	 {
		 echo "Пользователь не найден";
	 }
	 
	 
	 //$_SESSION['login'] =  

?>