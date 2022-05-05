<?php

class Contador
{

    public static function execute(int $inicio, int $final, int $incremento, String $typeOrder) {
        if(!in_array($typeOrder, ['crescente', 'decrescente'])) {
            return false;
        }

        $numbers = [];

        for(
            $init=$inicio; $typeOrder == 'crescente' ? $init <= $final : $init >= $final;
            $typeOrder == 'crescente' ? $init += $incremento : $init -= $incremento
        ) {
            $numbers[] = $init;
        }

        return $numbers;
    }

    // public static function crescent(int $inicio, int $final, int $incremento) {
    //     $numbers = [];

    //     for($init=$inicio; $init <= $final; $init += $incremento) {
    //         $numbers[] = $init;
    //     }

    //     return $numbers;
    // }
    
    // public static function decrescent(int $inicio, int $final, int $decrement) {
    //     $numbers = [];
        
    //     for($init=$inicio; $init >= $final; $init -= $decrement) {
    //         $numbers[] = $init;
    //     }

    //     return $numbers;
    // }
}