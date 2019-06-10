<?php
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];
$patternLogin = '/\@|\;|\?|\/|\:|\*/';
$patternEmail = '/\w+\@\w+\.\w+/';
$patternCode = 'nd82jaake';

if(preg_match($patternLogin, $login) === 1) {
    echo "Поле 'логин' не должно содержать символы @/*?,;:";
} elseif(strlen($password) < 8) {
    echo "Длина пароля должна быть минимум 8 символов ";
} elseif(preg_match($patternEmail, $email) === 0) {
    echo "Почта должна быть формата почта@домен.доменнаязона";
} elseif(strlen($firstName) === 0) {
    echo "Поле 'Имя' не может быть пустым";
} elseif(strlen($lastName) === 0) {
    echo "Поле 'Фамилия' не может быть пустым";
} elseif(strtolower($code) !==$patternCode) {
    echo "Кодовое слово неверно";
} elseif (strlen($code) === 0) {
    echo "Поле 'Кодовое слово' не может быть пустым";
} else {
    echo "Вы успешно зарегистрированы";
}
?>
