<?php

namespace App;

class Printer {
    
    public static function print(array $wordsRating): string
    {
        $result = [];
        
        foreach($wordsRating as $word => $count) {
            $result[] = $word . " = " . $count;
        }

        return implode("\n", $result);
    }
}