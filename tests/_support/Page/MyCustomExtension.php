<?php
namespace Page;
use \Codeception\Events;

class MyCustomExtension extends \Codeception\Extension
{
    // list events to listen to
    // Codeception\Events constants used to set the event

    public static $events = array(
        Events::SUITE_AFTER  => 'afterSuite',
        Events::TEST_BEFORE => 'beforeTest',
        Events::STEP_BEFORE => 'beforeStep',
        Events::TEST_FAIL => 'testFailed',
        Events::RESULT_PRINT_AFTER => 'print',
    );

    // methods that handle events

    public function afterSuite(\Codeception\Event\SuiteEvent $e) {}

    public function beforeTest(\Codeception\Event\TestEvent $e) {}

    public function beforeStep(\Codeception\Event\StepEvent $e) {}

    public function testFailed(\Codeception\Event\FailEvent $e) {}

}
