<?php

$host = 'db';
$user = 'root';
$password = 'root';
$db = 'Trucorp';

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    echo '(DB) Connection Failed' . $conn->connect_error;
}
//else{ echo '(DB) Connection Successfully';}

?>
