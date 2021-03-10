<?php 
// Decorator

// Component
interface Logger {
    public function log($msg);
}

// Concrete Component
class FileLogger implements Logger {
    public function log($msg) {
        echo "<p>Logging to a <b>FILE</b>: ${msg}</p>";
    }
}

// Decorator
abstract class LoggerDecorator implements Logger {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function log($msg) {
        $this->logger->log($msg);
    }
}

class EmailLogger extends LoggerDecorator {
    public function log($msg) {
        $this->logger->log($msg);
        echo "<p>Logging to <b>EMAIL</b>: {$msg}</p>";
    }
}

// 
class TextMessageLogger extends LoggerDecorator {
    public function log($msg) {
        $this->logger->log($msg);
        echo "<p>Logging to <b>SMS</b>: {$msg}</p>";
    }
}

//
class PrintLogger extends LoggerDecorator {
    public function log($msg) {
        $this->logger->log($msg);
        echo "<p>Logging to <b>PRINT</b>: {$msg}</p>";
    }
}

//
class FaxLogger extends LoggerDecorator {
    public function log($msg) {
        $this->logger->log($msg);
        echo "<p>Logging to <b>FAX</b>: {$msg}</p>";
    }
}

$log = new FileLogger();
$log = new TextMessageLogger($log);
$log = new FaxLogger($log);

$log->log("saving file");

/*
Source: Easy Learn Tutorial
https://www.youtube.com/user/easylearntutorial
In projects, you end up with different permutations from the same class. 
But redundancy happens if the same code is repeated.
The Decorator Pattern consists of three components:
1. the Component: the interface.
2. the Concrete Component: which handles the main task. 
3. the Decorator: the class that you implement but is basically just another interface.
You then have instances of the decorator.
Finally, you create the logger that you want.
*/