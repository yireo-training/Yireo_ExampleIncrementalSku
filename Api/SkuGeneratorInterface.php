<?php
declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Api;

interface SkuGeneratorInterface
{
    /**
     * @param string $oldSku
     * @return string
     */
    public function generateSku(string $oldSku): string;
}
