<?php

declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Test\Live;

use Magento\Framework\App\ObjectManager;
use PHPUnit\Framework\TestCase as ParentTestCase;

class TestCase extends ParentTestCase
{
    /**
     * @return mixed
     */
    protected function getObject(string $object)
    {
        $om = ObjectManager::getInstance();
        return $om->create($object);
    }
}

