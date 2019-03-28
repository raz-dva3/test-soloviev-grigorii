# test-soloviev-grigorii
Как создать базу данных и таблицу в mysql при помощи SQL-запросов?
1. Запускаем сервер MySQL.
2. Авторизируемся.
3. create database dbname 
dbname - имя создаваемой БД.
Если ответ "Query OK", то БД была успешно создана.


Для создания таблицы нам необходимо выбрать БД:
1. use dbname
Если видим ответ "Database changed" - база данных выбрана.
2. create table topics (customer_id, customer_name и customer_address);
сustomer_id и customer_name не должны быть пустыми (то есть NOT NULL). 
customer_id содержит целочисленное значение, которое автоматически увеличивается при добавлении новых строк.

