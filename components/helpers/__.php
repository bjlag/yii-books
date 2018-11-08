<?php

namespace app\components\helpers;

/**
 * Вспомомогальный класс для отладки приложения.
 * @package app\components\helpers
 */
class __
{
    /**
     * Добавление сообщения в лог типа INFO с категорией _.
     * @param mixed $data
     */
    public static function log($data)
    {
        \Yii::info(\yii\helpers\VarDumper::dumpAsString($data, 5), '_');
    }

    /**
     * Вывод на экран и завершение приложения.
     * @param mixed $data
     */
    public static function end($data)
    {
        echo \yii\helpers\VarDumper::dumpAsString($data, 5, true);
        exit();
    }
}