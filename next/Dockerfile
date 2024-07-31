FROM node:20-alpine

WORKDIR /usr/src/app

COPY package*.json ./

RUN apk update && apk add bash && npm install

COPY . .

EXPOSE 3000

CMD ["npm", "run", "dev"]

