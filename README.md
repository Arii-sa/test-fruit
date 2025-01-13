”もぎたて”　

環境構築
＊Dockerビルド
git clone git@github.com:Arii-sa/test-fruit.git
DockerDesktopアプリを立ち上げる
docker-compose up -d --build

＊Laravel環境構築
docker-compose exec php bash
composer install
「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
.envに以下の環境変数を追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

＊マイグレーションの実行
php artisan migrate

＊シーディングの実行
php artisan db:seed
