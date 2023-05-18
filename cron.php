<?
# set path to autoload.php
require_once(__DIR__ . '/../vendor/autoload.php');

$schedule = new Easycron\Schedule();
require_once __DIR__.'/cron_task.php';

$events = $schedule->dueEvents();
if(!empty($events)) {
    foreach ($events as $event) {
        $event->run($event->command);
    }
}