# PHP
phph learning

в форме queryRunner.html
в поле ввода создаю таблицу
CREATE TABLE urls (
id int,
url varchar(100),
description varchar(100)
);

после чего выбивает ошибку:

Warning: mysql_fetch_row() expects parameter 1 to be resource, boolean given in C:\OpenServer\domains\localhost\scripts\run_query.php on line 19
Результаты вашего запроса:


Warning: mysql_fetch_row() expects parameter 1 to be resource, boolean given in C:\OpenServer\domains\localhost\scripts\run_query.php on line 46

Препод говорил что это из-за того что предыдущий запрос возвращает false не присылает строку но я так и не понял шо цэ?=)
