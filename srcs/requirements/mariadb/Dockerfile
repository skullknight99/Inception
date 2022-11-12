FROM debian:buster


RUN	apt-get	update
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mariadb-server \
	&& service mysql start

EXPOSE 3306

CMD ["mysqld_safe"]