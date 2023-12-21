<?php
$con = new mysqli('localhost', 'root', 'U2FmzNDc6yyv28', 'library');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
