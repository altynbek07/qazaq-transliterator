<?php

namespace Altynbek07\QazaqTransliterator\Tests;

use Altynbek07\QazaqTransliterator\QazaqTransliterator;
use PHPUnit\Framework\TestCase;

class QazaqTransliteratorTest extends TestCase
{
    public function testTransliterate()
    {
        $text = 'Қазақ';
        $this->assertEquals('Qazaq', QazaqTransliterator::transliterate($text));
    }
}
