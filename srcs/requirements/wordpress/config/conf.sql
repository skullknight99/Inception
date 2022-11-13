CREATE DATABASE if not exists wordpress_db;
CREATE USER 'achraf'@'%';
GRANT ALL PRIVILEGES ON wordpress_db.* to 'achraf'@'%' IDENTIFIED BY '9998';
alter user 'root'@'localhost' identified by 'dream';
FLUSH PRIVILEGES;