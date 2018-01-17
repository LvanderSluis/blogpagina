<?php
include_once("classes/users.php");

$user = Users::Instance($_GET['userid']);
echo json_encode($sensor,JSON_PRETTY_PRINT);
?
