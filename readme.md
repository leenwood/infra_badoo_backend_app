## Backend documentation

Клонируем репозиторий в раздел с ядром линукса. Это важно так как из-за разности файловой системы винды и докера, если залить на обычный диск, то при конфертации туда или обратно, занимает много времени из-за чего фреймворк работает очень медленно и не успевает отправить ответ.

Скрин находиться в корне проекта

```git
git clone https://github.com/leenwood/infra_badoo_backend_app.git
```
### Открываем терминал

Монтируем образы докера
```bash 
docker-compose build
```
Ждем пока домантируется образы
Поднимаем докер в режиме демона
```bash 
docker-compose up -d
```

Разворачиваем симфони в докере
```bash 
docker exec -it composer install
```