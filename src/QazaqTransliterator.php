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
            'ә' => 'ä',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'ғ' => 'ğ',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'io',
            'ж' => 'j',
            'з' => 'z',
            'и' => 'i',
            'й' => 'i',
            'к' => 'k',
            'қ' => 'q',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'ң' => 'ŋ',
            'о' => 'o',
            'ө' => 'ö',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ұ' => 'ū',
            'ү' => 'ü',
            'ф' => 'f',
            'х' => 'h',
            'һ' => 'h',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'ş',
            'щ' => 'şh',
            'ъ' => '',
            'ы' => 'y',
            'і' => 'ı',
            'ь' => '',
            'э' => 'e',
            'ю' => 'iu',
            'я' => 'ia',

            'А' => 'A',
            'Ә' => 'Ä',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Ғ' => 'Ğ',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'İo',
            'Ж' => 'J',
            'З' => 'Z',
            'И' => 'İ',
            'Й' => 'İ',
            'К' => 'K',
            'Қ' => 'Q',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'Ң' => 'Ŋ',
            'О' => 'O',
            'Ө' => 'Ö',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ұ' => 'Ū',
            'Ү' => 'Ü',
            'Ф' => 'F',
            'Х' => 'H',
            'Һ' => 'H',
            'Ц' => 'C',
            'Ч' => 'Ch',
            'Ш' => 'Ş',
            'Щ' => 'Şh',
            'Ъ' => '',
            'Ы' => 'Y',
            'І' => 'I',
            'Ь' => '',
            'Э' => 'E',
            'Ю' => 'İu',
            'Я' => 'İa',
        ];
    }
}
