CREATE DATABASE if not exists my_database;
CREATE USER 'acmaghou42'@'%';
GRANT ALL PRIVILEGES ON my_database.* to 'acmaghou'@'%' IDENTIFIED BY '9998';
alter user 'root'@'localhost' identified by 'dream';
FLUSH PRIVILEGES;