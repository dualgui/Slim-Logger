<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'log.writer' => new \Slim\Logger\DateTimeFileWriter()
));

// alteracao

// alt 2