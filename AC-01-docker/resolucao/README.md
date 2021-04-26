## Para executar a aplicação contida nesse repositório é necessário executar os comandos abaixo:

### 1 - Criar rede
```
docker network create --driver bridge desafio1
```

### 2 - Subir container com a imagem do php
```
docker run -dit --name php --network desafio1 leonardorutz/php:latest
```

### 3 - Subir container com a imagem do myql
```
docker run -dit -p 3307:3306 --name mysql --network desafio1 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=DevFullCycle leonardorutz/mysql:latest
```

### 4 - Subir container com a imagem do nginx
```
docker run -dit --name nginx --network desafio1 -p 8080:80 leonardorutz/nginx:latest
```

### - Acessar a [url](http://localhost:8080)


