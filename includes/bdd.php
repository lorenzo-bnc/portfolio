<?php
    function getDB()
    {
        try{
            $pdo = new PDO("mysql=");
        }
        catch(PDOException $error){
            return $error->getMessage();
        }
    }