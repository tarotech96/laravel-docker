# Taro Nguyen

## Project structure

```
  docker-compose up -d
```

## Run project

```
  cp .env.example .env
```

In my_app container run ⬇️

```
  composer update
```

⚠️ If an error related to APP_KEY happens, please run the following command

```
  php artisan key:generate
```

Access the website: <http://localhost:8083>
