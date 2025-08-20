<?php

$conf = require "conf.php";
require 'Database.php';


$db = new Database($conf);

$curruserid=1;

$task = $db->qurey("select * from tasks where id=:id",[
"id"=>$_GET['id']
])->fetch();

authoize($task['user_id'] == $curruserid);
    $db->qurey("DELETE FROM tasks WHERE id=:id",[
    'id'=>$_GET['id']
]);
    header("location: /project/");
    exit();