<?php
// Singleton
class Database {
    public static $instance;

    public static function getInstance() {
        if(!isset(Database::$instance))
            Database::$instance = new Database();

        return Database::$instance;
    }

    public function __construct() {
        /* PRIVATE. */
    }

    public function getQuery() {
        return "SELECT * FROM our_table";
    }
}

$db = Database::getInstance();
echo $db->getQuery();

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
Singleton allows you to have one and only one instance of a class in your project. 
The Singleton is sometimes known as just a fancy term for the global variable -- it just uses a class instead.
As global variables are corruptible, the class is also susceptible as well. 
So in order to maintain the integrity of the program, it must only produce one instance of a class.
*/
