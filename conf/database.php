<?php

class Database {
    public function database_connection($host, $user, $password) {
        $db_conn = new mysqli($host, $user, $password);
        return $db_conn;
    }
    
    public function create_database($db_conn, $db_name) {
        $query_db = "CREATE DATABASE IF NOT EXISTS $db_name";
        $db_conn -> query($query_db);
        $db_conn -> select_db($db_name);
    }

    public function createTable($db_conn) {
        $query_table = "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `username` CHAR(40) NOT NULL,
            `email` CHAR(60) NOT NULL UNIQUE,
            `password` VARCHAR(255) NOT NULL
            );";
        $db_conn -> query($query_table);
    }
}
            
$db = new Database();
$db_conn = $db->database_connection("localhost", "root", "WwOF.5hpSdFGkrNh");
$db->create_database($db_conn, "log_in");
$db->createTable($db_conn);