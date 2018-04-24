#Qazaq Transliterator

Transliteration of the old Kazakh alphabet into a new one
![Qazaq Transliterator](https://tengrinews.kz/userdata/news/2017/news_315984/photo_212587.jpg)

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run ```composer require altynbek07/qazaq-transliterator:^0.1```

or add ```"altynbek07/qazaq-transliterator": "^0.1"``` to the require section of your ```composer.json```

### Using

```php
use altynbek07\qazaqTransliterator\QazaqTransliterator;
 
$oldText = 'Қазақстан Республикасы — Шығыс Еуропа мен Орталық Азияда орналасқан мемлекет.';
$newText = QazaqTransliterator::transliterate($oldText);
 
echo $newText; //Qazaqstan Respýblıkasy — Shyǵys Eýropa men Ortalyq Azııada ornalasqan memleket.
```

## Author

[Altynbek Kazezov](https://github.com/altynbek07/), e-mail: [altinbek__97@mail.ru](mailto:altinbek__97@mail.ru)
