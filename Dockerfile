FROM php:alpine
COPY . /app
WORKDIR /app
#ADD source dest
#RUN command
RUN php -S localhost:8080
CMD php index.php
