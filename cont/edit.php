<?php

// dd($_SERVER);
require 'Database.php';
$conf = require_once 'conf.php';
$db = new Database($conf['database']);
$lols=$db->qurey("SELECT * FROM tasks WHERE id=:id",[
    "id"=>$_GET['id']
])->FindOrFail();


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!$_POST['delete'])
    $db->qurey("UPDATE `project`.`tasks` SET `title` = :title, `body` = :body WHERE `id` = :id;",[
        "id"=>$_GET['id'],
        "title"=>$_POST['name'],
        "body"=>$_POST['body']
    ]);
    header("location: /project/");
    exit();
}

extract($lols);
require 'view/edit.view.php';

?>