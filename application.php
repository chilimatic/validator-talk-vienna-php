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

    $dm = new \chilimatic\lib\database\mongo\odm\DocumentManager(
        new MongoClient('mongodb://localhost:27017'),
        new \chilimatic\lib\parser\annotation\AnnotationOdmParser()
    );

    $test = new TestModel();
    if ($test->validateProperties()) {
        $dm->persist($test);
    }

    $test->setCount(12);
    if ($test->validateProperties()) {
        $dm->persist($test);
        var_dump($dm);
        var_dump($test);
    }



} catch (\Exception $e) {
    echo $e->getMessage();
}