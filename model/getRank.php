<?php
include_once "connectDB.php";

$_db = new DB();

$result = $_db->getRank();

# JSON-encode the response
echo $json_response = json_encode($result, JSON_UNESCAPED_UNICODE);
?>