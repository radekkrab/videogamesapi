
## API для управления видеоиграми.

### Установка 
1. Клонируйте репозиторий.
2. Установите зависимости с помощью Composer: composer install.
3. Настройте подключение к базе данных в файле .env.
4. Выполните миграции базы данных: php artisan migrate.
5. Заполните базу данных тестовыми данными php artisan db:seed.
6. Запустите сервер разработки: php artisan serve.

### Использование
Вы можете использовать инструмент, такой как Postman или cURL, для взаимодействия с API. 

Доступные конечные точки:

GET /videogames: Список всех видеоигр. <br>
POST /videogames: Создание новой видеоигры.<br>
GET /videogames/{id}: Получение информации о конкретной видеоигре.<br>
PUT /videogames/{id}: Обновление информации о видеоигре.<br>
DELETE /videogames/{id}: Удаление видеоигры.<br>
GET /videogames/genre/{genreId}: Получение видеоигр по жанру.<br>
GET /developers: Список всех разработчиков.<br>
POST /developers: Создание нового разработчика.<br>
GET /developers/{id}: Получение информации о конкретном разработчике.<br>
PUT /developers/{id}: Обновление информации о разработчике.<br>
DELETE /developers/{id}: Удаление разработчика.<br>
GET /genres: Список всех жанров.<br>
POST /genres: Создание нового жанра.<br>
GET /genres/{id}: Получение информации о конкретном жанре.<br>
PUT /genres/{id}: Обновление информации о жанре.<br>
DELETE /genres/{id}: Удаление жанра.


### Краткое описание технического задания

Необходимо сделать web api для взаимодействия с базой данных, в которой хранятся данные о видеоиграх, реализовать CRUD операции с ней, а также метод для получения списка игр определённого жанра.
Информация о игре: название, студия разработчик, несколько жанров, которым соответствует игра.
Используя любой фреймворк или без фреймворка.
Действуя согласно SOLID MVC MVVM.
Сделать минимум 3 слоя абстракций, а контроллеры "тонкими"..
