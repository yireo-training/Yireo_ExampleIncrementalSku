<?php
declare(strict_types=1);

namespace Yireo\ExampleIncrementalSku\Api;

interface SkuGeneratorInterface
{
    /**
     * @param string $oldSku
     * @return string
     */
    public function generateSku(string $oldSku): string;
}
