## Руководство для установки

1. В .env укажите правильные данные для подключения к БД:
   * DB_CONNECTION=mysql
   * DB_HOST=127.0.0.1
   * DB_PORT=
   * DB_DATABASE=wheretogo
   * DB_USERNAME=
   * DB_PASSWORD=
2. Заполните БД странами
    * запустите команду _php artisan country:parse_. Данная команда спарсит список стран (код страны и название страны) с сайта https://apps.timwhitlock.info/emoji/tables/iso3166
3. Для локального запуска приложения используйте _php artisan serve_
4. Готово!
