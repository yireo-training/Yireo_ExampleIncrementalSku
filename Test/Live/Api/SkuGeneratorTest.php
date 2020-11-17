<?php

declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Test\Live\Api;

use YireoTraining\ExampleIncrementalSku\Api\SkuGeneratorInterface;
use YireoTraining\ExampleIncrementalSku\Test\Live\TestCase;

class SkuGeneratorTest extends TestCase
{
    public function testIfSkuGeneratorInterfaceHasARealClass()
    {
        $skuGenerator = $this->getObject(SkuGeneratorInterface::class);
        $this->assertInstanceOf(SkuGeneratorInterface::class, $skuGenerator);
    }
}
