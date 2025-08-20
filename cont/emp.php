<?php
require 'Database.php';
$conf= require 'conf.php';
$db = new Database($conf['database']);

$cruretid = 1;

$task = $db->qurey('select * from tasks where id=:id',[
    'id'=>$_GET['id'],
])->FindOrFail();

$emp = $db->qurey('select * from user u , tasks t where u.id= :id and  u.id=t.user_id ',[
'id'=>$task['user_id'],
])->FindOrFail();

authoize($task['user_id'] == $cruretid);

require 'view/emp.view.php';