FROM node:18-alpine

WORKDIR /var/www/ui

COPY package.json /var/www/ui/
COPY yarn.lock /var/www/ui/

RUN yarn install

COPY . /var/www/ui

