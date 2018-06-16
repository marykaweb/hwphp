<?php
if ( !empty($_POST) ) {

	$fullmessage = "Вам пришло новое сообщение с сайта:\n "
	. "Имя отправителя: " . $_POST['username'] . "\n"
	. "Email отправителя: " . $_POST['useremail'] . "\n"
	. "Сообщение: \n " . $_POST['message'];

	$resaultMail = mail("marykaweb@gmail.com", "Сообщение с сайта", $fullmessage);

	if ( $resaultMail ) {
		echo "Сообщение отправлено успешно";
	} else {
		echo "Упс, что-то пошло не так";
	}
}

?>
<form action="contactform.php" method="post">
	<input type="text" name="username" placeholder="Ваше имя"><br>
	<input type="text" name="useremail" placeholder="Ваша почта"><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить">
</form>
