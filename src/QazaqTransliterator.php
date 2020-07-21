<?php

namespace Altynbek07\QazaqTransliterator;

class QazaqTransliterator
{
    /**
     * Transliteration of a string into the new Kazakh alphabet
     *
     * @param string $text
     * @return string
     */
    public static function transliterate(string $text): string
    {
        return strtr($text, self::getAlphabet());
    }

    /**
     * New Kazakh alphabet
     *
     * @return array
     */
    public static function getAlphabet(): array
    {
        return [
            'а' => 'a',
            'ә' => 'á',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'ғ' => 'ǵ',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'ıo',
            'ж' => 'j',
            'з' => 'z',
            'и' => 'ı',
            'й' => 'ı',
            'к' => 'k',
            'қ' => 'q',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'ң' => 'ń',
            'о' => 'o',
            'ө' => 'ó',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'ý',
            'ұ' => 'u',
            'ү' => 'ú',
            'ф' => 'f',
            'х' => 'h',
            'һ' => 'h',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'sch',
            'ъ' => '',
            'ы' => 'y',
            'і' => 'i',
            'ь' => '',
            'э' => 'e',
            'ю' => 'ıý',
            'я' => 'ıa',

            'А' => 'A',
            'Ә' => 'Á',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Ғ' => 'Ǵ',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'Io',
            'Ж' => 'J',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'I',
            'К' => 'K',
            'Қ' => 'Q',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'Ң' => 'Ń',
            'О' => 'O',
            'Ө' => 'Ó',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'Ý',
            'Ұ' => 'U',
            'Ү' => 'Ú',
            'Ф' => 'F',
            'Х' => 'H',
            'Һ' => 'H',
            'Ц' => 'C',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Sch',
            'Ъ' => '',
            'Ы' => 'Y',
            'Ь' => '',
            'Э' => 'E',
            'Ю' => 'Iý',
            'Я' => 'Iá',
        ];
    }
}
