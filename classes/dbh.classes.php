<?php

class Dbh
{
    public function connect()
    {
        try {
            $username = 'root';
            $password = '';
            $db = new PDO("mysql:host=localhost;dbname=crud", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}