<?php

use Monolog\Logger;
use Logtail\Monolog\LogtailHandler;

$logtail_logger = new Logger("logtail-source");
$logtailHandler = new LogtailHandler(env('TAILLOG_KEY'));
$logtail_logger->error("This is success", ["username" => $username]);

?>
