<?php

$recepient = "Sanyi.Ponzel@mail.ru";
$sitename = "Название сайта";

$name = trim($_POST["text"]);
$phone = trim($_POST["email"]);
$text = trim($_POST["message"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>