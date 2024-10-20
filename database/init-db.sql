-- Проверяем наличие базы данных и создаем её, если она не существует
SELECT 'CREATE DATABASE your_database_name'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'your_database_name')
\gexec  -- Выполняет результат запроса

-- Подключаемся к созданной базе данных
\c your_database_name;

-- Создаем таблицу, если она не существует
CREATE TABLE IF NOT EXISTS users (
  id SERIAL PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE
);