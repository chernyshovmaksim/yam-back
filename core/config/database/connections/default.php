<?php
return [
    'driver' => env('DB_TYPE', 'mysql'), //$database_type
    'host' => env('DB_HOST', 'db'), //$database_server
    'port' => env('DB_PORT', '3306'), //$database_port
    'database' => env('DB_DATABASE', 'yam'), //$dbase
    'username' => env('DB_USERNAME', 'root'), //$database_user
    'password' => env('DB_PASSWORD', 'root'), //$database_password
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => env('DB_CHARSET', 'utf8mb4'), // $database_connection_charset
    'collation' => env('DB_COLLATION', 'utf8mb4_general_ci'), //$database_collation
    'prefix' => env('DB_PREFIX', 'ixnd_'), //$table_prefix
    'method' => env('DB_METHOD', 'SET CHARACTER SET'), //$database_connection_method
    'strict' => env('DB_STRICT', false),
    'engine' => env('DB_ENGINE', 'innodb'),
    'options' => [
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ]
];
