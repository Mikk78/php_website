<?php

require_once "DBConnect.php";

// Проверка нажата ли кнопка отправки формы
if (isset($_REQUEST['register'])) {

    // Последующий код проверяет вообще есть формы
    // Проверяет логин
    if (!$_REQUEST['email']) {
        $error = 'Введите логин';
    }
    // Проверяет пароль
    if (!$_REQUEST['pass']) {
        $error = 'Введите пароль';
    }

    // Проверяет ошибки
    if (!$error) {
        $login = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];

        // берёт из БД пароль и id пользователя
        if ($result = mysqli_query($db_connect, "SELECT `password`, `id` FROM `users` WHERE `email`='" . $login . "'")) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Проверяет есть ли id
                if ($row['id']) {
                    // если id есть, то он сравнивает пароли функцией password_verify
                    if (password_verify($pass, $row['password'])) {
                        // Если функция возвращает true, то вы входите
                        header('Location: ../Congratulations.php');
                        // скрипт больше не выполняется
                        exit;
                    } else {
                        // Если функция возвращает false, то выводит ошибку
                        echo "Пароль не совпадает";
                    }
                } else {
                        // Выводит ошибку если не нашли такой логин
                    echo "Ввели не верны логин";
                }
            }
        }
    } else {
// Выводит ошибки, если есть пустые поля формы
        echo $error;
    }
}