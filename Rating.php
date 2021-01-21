<?php

namespace App;

class Rating {
    private const MAX_RESULTS = 5;
    private const SPLIT_PATTERN = '/[^\d\w]+/';

    /**
     * @return string[];
     */
    public static function createWordsRating(string $text): array
    {
        $words = self::breakIntoWords($text);

        $groupedByWord = self::groupByWords($words);
        
        $orderedByCount = self::orderByValue($groupedByWord);

        $firstResults = self::takeFirst($orderedByCount, self::MAX_RESULTS);

        return $firstResults;
    }

    /**
     * @return string[]
     */
    private static function breakIntoWords(string $text): array
    {
        return preg_split(self::SPLIT_PATTERN, $text, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * @return string[]
     */
    private static function groupByWords(array $words): array
    {
        $result = [];
        foreach ($words as $word) {
            if (array_key_exists($word, $result)) {
                $result[$word]++;
            } else {
                $result[$word] = 1;
            }
        }
        return $result;
    }

    /**
     * @return string[]
     */
    private static function orderByValue(array $wordGroups): array 
    {
        arsort($wordGroups);

        return $wordGroups;
    }

    /**
     * @return string[]
     */
    private static function takeFirst(array $wordsRating, int $count): array
    {
        return array_slice($wordsRating, 0, $count);
    }
}