<?php

namespace App\Lib\FriendlyUrl;

class FriendlyUrl {
    

    public static function transformString($palavra) {
        $palavra = (str_replace(' ', '-', $palavra));
        $palavra = self::strtr_utf8safe($palavra, ("áàãâéêíóôõúüçñÁÀÃÂÉÊÍÓÔÕÚÜÇÑ"), ("aaaaeeiooouucnAAAAEEIOOOUUCN"));
        $palavra = preg_replace("/[^a-zA-Z0-9-]/", '', $palavra);
        $palavra = str_replace('--', '-', $palavra);
        return strtolower($palavra);
    }

    private static function strtr_utf8safe($str, $from, $to) {
        $from = str_split(utf8_decode($from));
        $to = str_split(utf8_decode($to));
        for ($i = 0, $sf = count($from), $st = count($to); $i < $sf && $i < $st; $i++) {
            $str = str_replace(utf8_encode($from[$i]), $to[$i], $str);
        }
        return $str;
    }
}