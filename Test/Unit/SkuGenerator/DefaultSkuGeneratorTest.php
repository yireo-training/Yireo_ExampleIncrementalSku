<?php

declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Test\Unit\SkuGenerator;

use PHPUnit\Framework\TestCase;
use YireoTraining\ExampleIncrementalSku\SkuGenerator\DefaultSkuGenerator;

class DefaultSkuGeneratorTest extends TestCase
{
    /**
     * Test whether new SKUs are properly being returned
     */
    public function testGenerateSku()
    {
        $defaultSkuGenerator = new DefaultSkuGenerator;
        $this->assertEquals('FOOBAR-02', $defaultSkuGenerator->generateSku('FOOBAR-01'));
        $this->assertEquals('FOOBAR1235', $defaultSkuGenerator->generateSku('FOOBAR1234'));
        $this->assertEquals('FOOBAR', $defaultSkuGenerator->generateSku('FOOBAR'));
    }
}
