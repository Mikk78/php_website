<?php
// Страница регистрации нового пользователя

// Соединямся с БД
require_once "DBConnect.php";

// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['register'])) {

    // Проверка есть ли логин
    if (!$_REQUEST['login']) {
        $error = 'Введите login';
    }

    // Проверка есть ли email
    if (!$_REQUEST['email']) {
        $error = 'Введите email';
    }

    // Все последующие проверки, проверяют форму и выводят ошибку
    // Проверка на совпадение паролей
    if ($_REQUEST['pass'] !== $_REQUEST['pass_rep']) {
        $error = 'Пароль не совпадает';
    }

    // Проверка есть ли вообще повторный пароль
    if (!$_REQUEST['pass_rep']) {
        $error = 'Введите повторный пароль';
    }

    // Проверка есть ли пароль
    if (!$_REQUEST['pass']) {
        $error = 'Введите пароль';
    }


    // Если ошибок нет, то происходит регистрация
    if (!$error) {
        $login = $_REQUEST['login'];
        $email = $_REQUEST['email'];
        // Пароль хешируется
        $pass = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);

        // Добавление пользователя
        mysqli_query($db_connect, "INSERT INTO `users` (`login`, `email`, `password`) VALUES ('" . $login . "','" . $email . "','" . $pass . "')");

        // Подтверждение что всё хорошо
        header('Location: ../Congratulations.php');

    } else {
        // Если ошибка есть, то выводить е
        echo $error;
    }
}

