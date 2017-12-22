<?php

    // phpinfo();die;

    // error_reporting(1);

    $target = '/data/wwwroot/gitproject'; // 生产环境web目录

    //  $token = 'photo';
    //  $wwwUser = 'www';
    //  $wwwGroup = 'www';


    // file_get_contents 将文件内容读入到字符串中，把文件内容转入到字符串

    // $json = json_decode(file_get_contents('php://input'), true);


    // var_dump($json);die;

    /*  if (empty($json['token']) || $json['token'] !== $token) {
    exit('error request');
    }*/


    // $repo = $json['repository']['name'];   // git仓库名字

    // echo $repo;

    $cmd = "cd $target && git pull origin master";

    // $cmd = "cd $target && touch liuyu18.html";

    // echo $cmd;die;
    // 
    

    // mkdir("/data/wwwroot/gitproject",'abc.html');


    // print_r(shell_exec($cmd));die;

    echo $cmd;

    echo shell_exec($cmd);


  // echo "222";

// echo shell_exec('touch liuyu.html');


// $a = shell_exec('cd /data/wwwroot/gitproject && touch liuyu.html');

// echo $a;