<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.11.15
 * Time: 0:00
 */

$login = $_POST['login'];

$strLength = strlen($login);

if (preg_match("|^[A-Z0-9]+$|i", $login) && $strLength > 1 && $strLength < 10) {
    echo "Все верно";
} else {
    echo "Неверно";
}