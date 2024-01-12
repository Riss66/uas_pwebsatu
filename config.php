<?php
define('DB_SIGNUP', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'SIGNUP');

$mysql=new mysqli(DB_SIGNUP, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysql === false) {
    die("ERROR : Could not connect.". $mysql->connect_error);
}