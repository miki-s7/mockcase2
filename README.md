# 勤怠管理アプリ

## 環境構築

### Docker ビルド

1. git clone git@github.com:/PiGLy.git
1. docker-compose up -d --build

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;※MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

### Laravel 環境構築

1. docker-compose exec php bash
1. composer install
1. composer require livewire/livewire
1. cp .env.example .env
1. .env ファイルの一部を以下のように編集

```
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

6. php artisan key:generate
1. php artisan migrate
1. php artisan db:seed

## user のログイン用初期データ

- メールアドレス: user@xxx.jp
- パスワード: user1234

## admin(管理者) のログイン用初期データ

- メールアドレス: admin@xxx.jp
- パスワード: admin1234

## 使用技術

- MySQL 8.0.26
- PHP 7.4.9-fpm
- Laravel 8

## URL

- 環境開発: http://localhost/login
- phpMyAdmin: http://localhost:8080/

## ER 図

![image]
<img width="574" height="430" alt="Image" src="https://github.com/user-attachments/assets/dbae3aa9-88ef-4744-b278-197030fa4c52" />