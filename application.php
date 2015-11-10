<?php
/**
 *
 * @author j
 * Date: 11/9/15
 * Time: 4:09 PM
 *
 * File: application.php
 */

use app\model\TestModel;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $dispatcher = \chilimatic\lib\di\ClosureFactory::getInstance(
        realpath('../app/config/serviceCollection.php')
    );

    $test = new TestModel();
    var_dump($test->validateProperties());

    $test->setCount(12);
    var_dump($test->validateProperties());

} catch (\Exception $e) {
    echo $e->getMessage();
}