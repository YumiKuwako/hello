<?php

require 'recipe/composer.php';

// デプロイ先のサーバを定義
server('ec2-52-192-100-120.ap-northeast-1.compute.amazonaws.com', 22)
    ->user('root')
   //pemファイルの場所
   ->pemFile('C:\Users\y.kuwako\Desktop\フィールズ関係フォルダ\秘密鍵\Fields.pem')
    // デプロイ先のベースパスを定義
    ->env('deploy_path', '/var/www/');
    ->stage('production');

// Gitリポジトリを設定
set('repository', 'https://github.com/YumiKuwako/hello.git');

?>