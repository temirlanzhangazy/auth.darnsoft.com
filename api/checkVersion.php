<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json; charset=utf-8');
    
    $version = [136, 136];
    echo json_encode($version, JSON_UNESCAPED_UNICODE);
?>