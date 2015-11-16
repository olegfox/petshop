<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.11.15
 * Time: 22:17
 */

/**
 * Функция для работы с файлом
 *
 * @param $fileName
 */
function fileProcessing($fileName){
    $fh = fopen($fileName, 'r+') or die('Не получается открыть файл'); // Открытие файла

    if (flock($fh, LOCK_EX)) { // Если файл блокируется
        $sum = file_get_contents($fileName); // Считывание содержимого файла
        $sum++;
        fwrite($fh, $sum); // Увеличение полученного числа на 1 и запись его в файл
        flock($fh, LOCK_UN); // Снятие блокировки
        fclose($fh); // Закрытие файла
    }
}