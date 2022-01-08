## Readme
<ul>
<li>Скопировать</li>
<li>Переименовать .env.example в .env</li>
<li>Отредактировать .env:
<code>
APP_URL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DBNAME
DB_USERNAME=USER
DB_PASSWORD=PASS
MAIL_MAILER=smtp
MAIL_HOST=smtp.host.to
MAIL_PORT=25
MAIL_USERNAME=USER
MAIL_PASSWORD=PASS
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="blog@localhost"
</code>
</li>
<li>Сделать npm install</li>
<li>Сделать composer update</li>
<li>Если нужно первоначальное наполнение и смешные посты, то залить !!!EX_blog.sql в указанную в DB_DATABASE базу</li>
<li>Если нет, просто запустить php artisan migrate - создаст пустые таблицы</li>

<li>Для отправки почты запустить php artisan queue:work</li>

</ul>