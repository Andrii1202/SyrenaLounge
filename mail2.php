<?php
$fio = $_POST['user_name'];
$surname = $_POST['user_surname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$topic = $_POST['user_topic'];
$message = $_POST['user_message'];
$acept = $_POST['user_acept'];

$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

$to = "info@kfstudia.com";
$subject = "=?utf-8?B?". base64_encode("Заявка с сайта Syrena Lounge"). "?=";
$header = "From: kf.webstudia@gmail.com\n";
$header  = "Content-type: text/html; charset=utf-8 \r\n";
$message = "Name:\t".$fio."<br/>Surname:\t".$surname."<br/>Email:\t".$email."<br/>Phone:\t".$phone."<br/>Topic:\t".$topic."<br/>Message:\t".$message."<br/>Сonsent:\t".$acept;

if($fio == NULL or $surname == NULL or $email == NULL or $phone == NULL or $topic == NULL or $message == NULL or $acept == NULL)
{
  echo 'Вы заполнили не все поля. Пожалуйста вернитесь назад и заполните форму еще раз.';
} else {
	if (mail($to, $subject, $message, $header))
	{     
 		echo "сообщение успешно отправлено"; 
		header('location: contacts.php'); //добавить сюда всплывающее окно благодарности
	} else { 
		echo "при отправке сообщения возникла ошибка";
		//добавить сюда всплывающее окно ошибки отправки 
	}
}
?>