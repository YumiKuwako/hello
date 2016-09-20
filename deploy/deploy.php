<?php

require 'recipe/composer.php';

// デプロイ先のサーバを定義
server('ec2-52-192-100-120.ap-northeast-1.compute.amazonaws.com', 22)
    ->user('root')
    ->pemFile('C:\Users\y.kuwako\Desktop\フィールズ関係フォルダ\秘密鍵\Fields.pem');
    ->stage('production')
    ->env('branch', 'master')
    // デプロイ先のベースパスを定義します。
    ->env('deploy_path', '/var/www/');

// Gitリポジトリを設定します。サーバ上にgitが必要です。
set('repository', 'https://github.com/YumiKuwako/hello.git');

?>