<?php

require 'recipe/composer.php';

// �f�v���C��̃T�[�o���`
server('ec2-52-192-100-120.ap-northeast-1.compute.amazonaws.com', 22)
    ->user('root')
    ->pemFile('C:\Users\y.kuwako\Desktop\�t�B�[���Y�֌W�t�H���_\�閧��\Fields.pem');
    ->stage('production')
    ->env('branch', 'master')
    // �f�v���C��̃x�[�X�p�X���`���܂��B
    ->env('deploy_path', '/var/www/');

// Git���|�W�g����ݒ肵�܂��B�T�[�o���git���K�v�ł��B
set('repository', 'https://github.com/YumiKuwako/hello.git');

?>