<?php

declare(strict_types=1);

namespace Yireo\ExampleIncrementalSku\Test\Live\Api;

use Yireo\ExampleIncrementalSku\Api\SkuGeneratorInterface;
use Yireo\ExampleIncrementalSku\Test\Live\TestCase;

class SkuGeneratorTest extends TestCase
{
    public function testIfSkuGeneratorInterfaceHasARealClass()
    {
        $skuGenerator = $this->getObject(SkuGeneratorInterface::class);
        $this->assertInstanceOf(SkuGeneratorInterface::class, $skuGenerator);
    }
}
