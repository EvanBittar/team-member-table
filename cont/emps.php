<?php

require 'Database.php' ;
$conf= require 'conf.php';
$db= new Database($conf['database']);

$curruserid=1;

$tasks = $db->qurey('SELECT * FROM tasks ')->fetchAll();

// authoize($tasks['user_id'] == $curruserid);
// $email = $db->qurey('SELECT * FROM user where id=:id',[
//     'id'=>$curruserid
// ])->fetch();
// // dd($email);
// authoize($email['id'] == $curruserid);
require 'view/emps.view.php';
