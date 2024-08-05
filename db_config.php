<?php

use Habitualize\lib\vendor\yasmf\yasmf\src\yasmf\DataSource;

$local = new DataSource (
    $host = 'localhost',
    $port = 3306, 
    $db_name = 'habitualize',
    $user = 'root', 
    $pass = 'root',
    $charset = 'utf8mb4'
);

$server = $data_source = new DataSource(
        $host = '127.0.0.1',
        $port = 3306, 
        $db_name = 'yuuhuxxp_eureka', 
        $user = 'yuuhuxxp_admin', 
        $pass = 'lZLr4jj=^lL+;crc=Z', 
        $charset = 'utf8mb4'
    );

return [
    "LOCAL_DEV" => $local,
    "ABOARD_DEV" => $server
];