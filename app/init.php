<<<<<<< HEAD
<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=todolist;host:localhost', 'root', '');

if(!isset($_SESSION['user_id'])) {
	die('You are not signed in.');
=======
<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=todolist;host:localhost', 'root', '');

if(!isset($_SESSION['user_id'])) {
	die('You are not signed in.');
>>>>>>> 4ac698664c7c3e11e883ecb078c93e9011ea240a
}