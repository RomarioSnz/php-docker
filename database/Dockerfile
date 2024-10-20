FROM postgres:latest

# Устанавливаем расширение dblink
RUN apt-get update && apt-get install -y postgresql-contrib

# Копируем SQL-скрипты в контейнер
COPY ./init-db.sql /docker-entrypoint-initdb.d/

EXPOSE 5432