cd ../

# 存在するフォルダを指定するとエラーになるため一度learningを削除
rm -Rf ./learning

# プロジェクト名 learning で作成
composer create-project "laravel/laravel=${LARAVEL_VERSION}" learning -n

# プロジェクトディレクトリに移動
cd ./learning

# .env ファイルを生成
cp .env.example .env

# keyを生成
php artisan key:generate

# storage 配下のシンボリックを作成
php artisan storage:link

# storage配下に書き込み権限を付与
chmod -R 777 /var/www/learning/storage

# DB接続情報を上書き
sed -i -e "s/DB_HOST=.*$/DB_HOST=$MYSQL_HOST/" \.env
sed -i -e "s/DB_DATABASE=.*$/DB_DATABASE=$MYSQL_DATABASE/" .env
sed -i -e "s/DB_USERNAME=.*$/DB_USERNAME=$MYSQL_USER/" .env
sed -i -e "s/DB_PASSWORD=.*$/DB_PASSWORD=$MYSQL_PASSWORD/" .env

# DB接続チェックをします
php artisan tinker ../db_check.php

