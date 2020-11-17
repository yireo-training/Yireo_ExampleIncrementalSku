<?php

namespace YireoTraining\ExampleIncrementalSku\SkuGenerator;

use YireoTraining\ExampleIncrementalSku\Api\SkuGeneratorInterface;

class DefaultSkuGenerator implements SkuGeneratorInterface
{
    /**
     * @param string $oldSku
     * @return string
     */
    public function generateSku(string $oldSku): string
    {
        if (preg_match('/([0-9]+)$/', $oldSku, $match)) {
            $newNumber = $match[1] + 1;
            $newNumber = str_pad($newNumber, strlen($match[1]), '0', STR_PAD_LEFT);
            return preg_replace('/' . $match[1] . '$/', $newNumber, $oldSku);
        }

        return $oldSku;
    }
}
