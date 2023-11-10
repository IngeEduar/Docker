FROM node:16

WORKDIR /app

COPY spa_react/package*.json ./

RUN npm install

COPY ./spa_react/ .

RUN npm run build

EXPOSE 3000

VOLUME ["/app"]

CMD [ "npm", "start" ]

