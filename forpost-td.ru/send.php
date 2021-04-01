<?php

	$fio = $_POST['fio'];
	$email = $_POST['email'];
	$fio = htmlspecialchars($fio);
	$email = htmlspecialchars($email);
	$fio = urldecode($fio);
	$email = urldecode($email);
	$fio = trim($fio);
	$email = trim($email);
	mail("forpost.td@mail.ru", "Заявка с сайта", "Телефон:".$fio.". E-mail: ".$email ,"From: mail.ru \r\n");
	ini_set('display_errors','On');
	error_reporting('E_ALL');


	// ini_set('display_errors','On');
	// error_reporting('E_ALL');
	//echo $fio;
	//echo "<br>";
	//echo $email;
	// if (mail("942003@bk.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email))
	//  {     echo "сообщение успешно отправлено";
	// } else {
	//     echo "при отправке сообщения возникли ошибки";}
?>