<?php


class db
{
    protected function connect()
    {
        //connection
        try {
            $conn = new PDO("mysql:host=localhost;dbname=teststudent", 'root', '');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}