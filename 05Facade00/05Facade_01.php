<?php 
// Facade
// Connects to the database
class Database {

} 

// Generate an HTML template
class Template {

}

// Logging
class Logger {

}

// Create a page and log activity
class PageFacade {
    public function createAndServe($id, $msg = "") {
        $db = new Database();
        $data = new $db->getData($id);

        $template = new Template($id, $data);
        $template->serve();

        $logger = new Logger();
        $logger->log($msg); 
    }
}

$page = new PageFacade();

$id = $_POST["id"];
$page->createAndServe($id, "Serving a page for ID: ${id}");



/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
The Facade pattern provides a simplified interface when there is a complex system of classes, a library or a framework.
Basically, the interface delegates most of the work to other classes. 
*/
