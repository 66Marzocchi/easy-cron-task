<?
$_SERVER["DOCUMENT_ROOT"] = realpath(__DIR__ . "/../megacrm");
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
require_once($DOCUMENT_ROOT . '/vendor/autoload.php');

$schedule = new Easycron\Schedule();

require 'cron_task.php';

$events = $schedule->dueEvents();
if(!empty($events)) {
    foreach ($events as $event) {
        $event->run($event->command);
    }
}