<?php 

$ini_file = parse_ini_file('/home3/yqepxzmy/db.ini');
$database = mysqli_connect ("localhost", $ini_file['username'], $ini_file['password'], $ini_file['db'])
or die ('I cannot connect to the database.');
    
?>