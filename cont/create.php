<?php

require 'Database.php';
$conf = require 'conf.php';

$db = new Database($conf['database']);

$curruserid=1;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$db->qurey("INSERT INTO tasks (title, body,user_id) VALUES
(:title,:body,:user_id);",[
    'title'=>$_POST['name'],
    'body'=>$_POST['body'],
    'user_id'=> 1
]);
header("location: /project");
exit();
}


require_once 'view/create.view.php';
?>