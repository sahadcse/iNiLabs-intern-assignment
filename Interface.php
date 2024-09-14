<?php

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function log($message) {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo $message . PHP_EOL;
    }
}

$fileLogger = new FileLogger('data.txt');
$fileLogger->log('This is a Data message.');

$consoleLogger = new ConsoleLogger();
$consoleLogger->log('This is a data message to the console.');
?>