<?php 

// Connects to the database
class Database {

} 

// Generate an HTML template
class Template {

}

// Logging
class Logger {

}

$id = 34;

$db = new Database();
$data = new $db->getData($id);
$template = new Template($id, $data);
$logger = new Logger();
$logger->log("Creating a page for ID: ${id}"); 

$template->serve();

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Facade pattern provides a simplified interface when there is a complex system of classes, a library or a framework.
Basically, the interface delegates most of the work to other classes. 
*/