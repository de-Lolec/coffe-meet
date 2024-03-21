FROM node:20.2.0

WORKDIR /app

COPY package.json ./

RUN apt-get update
RUN npm install npm@latest
RUN npm install -g eslint --unsafe-perm=true --allow-root

COPY . .

RUN chown -R node:node /app

USER node

EXPOSE 8080

CMD ["npm"]
CMD ["npm", "run", "dev","--","--host"]
