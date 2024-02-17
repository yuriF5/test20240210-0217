# 確認テストお問い合わせフォームとログイン検索機能

## 環境構築
### Dockerビルド
 
 1.git clone: http://github.com/coachtech-material/laravel-docker-template
 
 2.docker-compose up -d--build

### Laravel環境構築
 
 1.docker-compose exec php bash
 
 2.composer install
 
 3..env.exampleファイルから.envを作成し、環境変数を変更

 4.php artisan key:generate
 
 5.php artisan migrate
 
 6.php artisan db:seed

## 使用技術
- PHP 8.1
- Laravel 8.0
- MySQL 10.6
- OS windows 11

## ER図
<img src="https://github.com/yuriF5/test-ability/assets/152612024/63270cb8-8e56-4578-abd0-4f71e0e7f852" width="50%">

## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080/
