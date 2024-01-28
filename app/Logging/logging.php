<?php

use Monolog\Logger;
use Logtail\Monolog\LogtailHandler;

// Create the $logtail_logger outside the routes
$logtail_logger = new Logger("logtail-source");
$logtail_logger->pushHandler(
    new LogtailHandler(env('TAILLOG_KEY'))
);

$logtail_logger->error("This is success", ["username" => $username]);



?>
