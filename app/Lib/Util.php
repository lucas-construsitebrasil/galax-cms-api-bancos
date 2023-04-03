<?php

namespace App\lib;

class Util
{
    static function montaNomeTBL($str)
    {
        $from = '��������������������������� /#$|?&';
        $to = 'AAAAEEIOOOUUCaaaaeeiooouucC------e';
        $str = str_replace('-', '', strtr($str, $from, $to));
        $str = preg_replace('/[^a-zA-Z0-9-\s]/', '', trim(strtolower($str)));
        return $str;
    }
}