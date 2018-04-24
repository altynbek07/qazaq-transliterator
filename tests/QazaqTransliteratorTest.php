<?php

use altynbek07\qazaqTransliterator\QazaqTransliterator;

class QazaqTransliteratorTest extends PHPUnit_Framework_TestCase
{
    public function testTransliterate()
    {
        $text = 'Қазақ';
        $this->assertEquals('Qazaq', QazaqTransliterator::transliterate($text));
    }
}