FROM tutum/lamp

WORKDIR /var/www/html

RUN rm -rf * && \
    rm -f /run.sh

COPY ./www/ /tmp
COPY ./sql.sql /var/www/
COPY ./run.sh /

RUN chmod 0777 /run.sh