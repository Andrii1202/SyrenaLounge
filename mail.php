<?php
$fio = $_POST['user_name'];
$email = $_POST['user_email'];
$date = $_POST['user_date'];
$time = $_POST['user_time'];
$amount = $_POST['user_amount'];

$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

$to = "info@kfstudia.com";
$subject = "=?utf-8?B?". base64_encode("Заявка с сайта Syrena Lounge"). "?=";
$header = "From: kf.webstudia@gmail.com\n";
$header  = "Content-type: text/html; charset=utf-8 \r\n";
$message = "Name:\t".$fio."<br/>E-mail:\t".$email."<br/>Date:\t".$date."<br/>Time:\t".$time."<br/>Amount of person:\t".$amount;

if($fio == NULL or $date == NULL or $email == NULL or $time == NULL or $amount == NULL)
{
  echo 'Вы заполнили не все поля. Пожалуйста вернитесь назад и заполните форму еще раз.';
} else {
	if (mail($to, $subject, $message, $header))
	{     
 		echo "сообщение успешно отправлено"; 
		header('location: index.php'); //добавить сюда всплывающее окно благодарности
	} else { 
		echo "при отправке сообщения возникла ошибка";
		//добавить сюда всплывающее окно ошибки отправки 
	}
}
?>