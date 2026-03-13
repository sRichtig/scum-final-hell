<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

include 'template/header.php';
include 'template/navigation.php';
include 'template/body.php';    
include 'template/footer.php';

?>