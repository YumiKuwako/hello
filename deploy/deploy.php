<?php

require 'recipe/composer.php';

// �f�v���C��̃T�[�o���`
server('ec2-52-192-100-120.ap-northeast-1.compute.amazonaws.com', 22)
    ->user('root')
   //pem�t�@�C���̏ꏊ
   ->pemFile('C:\Users\y.kuwako\Desktop\�t�B�[���Y�֌W�t�H���_\�閧��\Fields.pem')
    // �f�v���C��̃x�[�X�p�X���`
    ->env('deploy_path', '/var/www/');
    ->stage('production');

// Git���|�W�g����ݒ�
set('repository', 'https://github.com/YumiKuwako/hello.git');

?>