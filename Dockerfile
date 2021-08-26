FROM php:alpine
COPY . /app
WORKDIR /app
#ADD source dest
#RUN command
CMD php index.php
