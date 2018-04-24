# Qazaq Transliterator

Транслитерация старого казахского алфавита на новый
![Qazaq Transliterator](https://tengrinews.kz/userdata/news/2017/news_315984/photo_212587.jpg)

## Установка

### Composer

Предпочтительным способом установки этого расширения является [Composer](http://getcomposer.org/).

Запустите команду ```composer require altynbek07/qazaq-transliterator:^0.1```

или добавьте ```"altynbek07/qazaq-transliterator": "^0.1"``` в секцию зависимостей в файле ```composer.json```

## Использование

```php
use altynbek07\qazaqTransliterator\QazaqTransliterator;
 
$oldText = 'Қазақстан Республикасы — Шығыс Еуропа мен Орталық Азияда орналасқан мемлекет.';
$newText = QazaqTransliterator::transliterate($oldText);
 
echo $newText; //Qazaqstan Respýblıkasy — Shyǵys Eýropa men Ortalyq Azııada ornalasqan memleket.
```

## Автор

[Altynbek Kazezov](https://github.com/altynbek07/), e-mail: [altinbek__97@mail.ru](mailto:altinbek__97@mail.ru)
