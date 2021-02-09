FROM php:8.0-fpm as dev
WORKDIR /usr/src/bbbmeter

ARG SSH_PRIVATE_KEY

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV SSH_PRIVATE_KEY=$SSH_PRIVATE_KEY

COPY . /usr/src/bbbmeter
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt update \
  && apt install -y \
    ssh

RUN mkdir ~/.ssh/ \
 && echo "${SSH_PRIVATE_KEY}" > ~/.ssh/id_rsa \
 && ssh-keyscan -t rsa github.com >> ~/.ssh/known_hosts \
 && chmod 600 ~/.ssh/*