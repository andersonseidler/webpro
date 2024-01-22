
# Setup Docker Para Projetos Laravel (8, 9 ou 10)

### Passo a passo
Clonar repositório das config docker
```sh
git clone https://github.com/andersonseidler/setup-docker-laravel.git setup-docker-laravel
```

Clonar os arquivos do Laravel
```sh
git clone https://github.com/andersonseidler/laravel.git laradoc
```


Copie os arquivos docker-compose.yml, Dockerfile e o diretório docker/ para a pasta laradoc
```sh
cp -rf setup-docker-laravel/* laradoc/
```
```sh
cd laradoc/
```


Criar uma cópia do arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Portal Laradoc"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=dblaradoc
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)
