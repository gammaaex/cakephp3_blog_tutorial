# cakephp3_blog_tutorial

## 構築方法

1. リポジトリをclone
    1. `git clone https://github.com/gammaaex/cakephp3_blog_tutorial.git`
    1. `cd cakephp3_blog_tutorial`
1. コンテナを起動
    1. `cp .env.default .env`
    1. docker-compose up -d
1. データベースの準備
    1. phpMyAdminにアクセス
        1. http://localhost:8080/
        1. ※コンテナを起動してすぐにアクセスするとプログラムが全て起動しておらず、表示されない場合があります。その場合は少し時間をおいてください。
    1. データベースの作成
        1. 左側、`New`ボタンをクリック
        1. データベース名`blog`、照合順序`utf8mb4_general_ci`でデータベースを作成
    1. マイグレーションと初期データの投入
        1. apacheのコンテナに入る
            1. `docker ps`でコンテナ名を確認
            1. `docker exec -it コンテナ名 /bin/bash`でコンテナに入る
                1. 例：`docker exec -it cakephp3_blog_tutorial_apache_1 /bin/bash`
        1. `cd blog`でプロジェクトに移動
        1. `composer install`で依存関係を解決
            1. 最後に`Set Folder Permissions ? (Default to Y) [Y,n]?`と聞かれるが、`Y`を入力してEnter
        1. `config/app.php`の**245**行目あたり、**Datasources**の**default**を修正
            1. `host` => `mysql`
            1. `username` => `root`
            1. `password` => `root`
            1. `database` => `blog`
        1. `bin/cake migrations migrate`でマイグレーションを実行
        1. `bin/cake migrations seed --seed DatabaseSeed`で初期データを投入
1. Webページにアクセス
    1. http://localhost:8765/blog
        1. Email:`login1@mail.com`
        1. Password:`secret1`
1. 終了方法
    1. `exit`でコンテナから脱出
    1. リポジトリのルート（docker-compose.ymlがある場所）で`docker-compose down`を叩いてコンテナを停止
