<?php
/*ПОМЕЩАЕМ ДАННЫЕ ИЗ ПОЛЕЙ В ПЕРЕМЕННЫЕ*/
$name = $_POST["name"];
$phone = $_POST["phone"];

/*ЗДЕСЬ ПРОВЕРЯЕМ ЕСЛИ ХОТЯ БЫ ОДНО ИЗ ПОЛЕЙ НЕ ЗАПОЛНЕНО МЫ ВОЗВРАЩАЕМ СООБЩЕНИЕ*/
if ($name == "" or $phone == "") {
	echo "Заполните все поля";
} else {
	/*ЕСЛИ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ НАЧИНАЕМ СОБИРАТЬ ДАННЫЕ ДЛЯ ОТПРАВКИ*/
	$to = "jivoy1057@mail.ru"; /* Адрес, куда отправляем письма*/
	$subject = "Новая заявка с сайта <Больше чем детский сайт>"; /*Тема письма*/
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: <info@detimatveevskiy.ru>\r\n";/*ОТ КОГО*/

	/*ВО ВНУТРЬ ПЕРЕМЕННОЙ $message ЗАПИСЫВАЕМ ДАННЫЕ ИЗ ПОЛЕЙ */
	$message .= "Имя пользователя: " . $name . "\n";
	$message .= "Телефон: " . $phone . "\n";

	/*ДЛЯ ОТЛАДКИ ВЫ МОЖЕТЕ ПРОВЕРИТЬ ПРАВИЛЬНО ЛИ ЗАПИСАЛИCM ДАННЫЕ ИЗ ПОЛЕЙ*/

	$send = mail($to, $subject, $message, $headers);

	/*ЕСЛИ ПИСЬМО ОТПРАВЛЕНО УСПЕШНО ВЫВОДИМ СООБЩЕНИЕ*/
	if ($send == "true") {
		echo "Ваше сообщение отправлено. Ожидайте звонка нашего специалиста.\r\n";
	}
	/*ЕСЛИ ПИСЬМО НЕ УДАЛОСЬ ОТПРАВИТЬ ВЫВОДИМ СООБЩЕНИЕ ОБ ОШИБКЕ*/ else {
		echo "Не удалось отправить, попробуйте снова!";
	}
} ?>