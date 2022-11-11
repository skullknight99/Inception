FROM debian:buster


RUN	apt-get	update
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mariadb-server

CMD ["service", "mysql start", "daemon off;"]