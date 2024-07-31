FROM node:20-alpine

ENV TZ Asia/Tokyo

WORKDIR /usr/src/app

COPY ./ ./

RUN apk update && apk add bash

RUN npm install

EXPOSE 3000

CMD ["npm", "run", "dev"]
