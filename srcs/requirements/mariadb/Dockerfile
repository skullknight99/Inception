FROM debian:buster

RUN	apt-get	update && apt-get install -y mariadb-server

CMD ["service mysql start", "daemon off;"]