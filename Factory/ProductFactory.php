<?php

declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Factory;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\ObjectManagerInterface;
use YireoTraining\ExampleIncrementalSku\Util\GetNewSku;

class ProductFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var GetNewSku
     */
    private $getNewSku;

    /**
     * ProductFactory constructor.
     * @param ObjectManagerInterface $objectManager
     * @param GetNewSku $getNewSku
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        GetNewSku $getNewSku
    ) {
        $this->objectManager = $objectManager;
        $this->getNewSku = $getNewSku;
    }

    /**
     * @param array $arguments
     * @return mixed
     */
    public function create(array $arguments = []): ProductInterface
    {
        /** @var ProductInterface $product */
        $product = $this->objectManager->create(ProductInterface::class, $arguments);
        $product->setTypeId('virtual');
        $product->setPrice(0.01);
        $product->setSku($this->getNewSku());

        return $product;
    }

    /**
     * @return string
     */
    private function getNewSku(): string
    {
        return $this->getNewSku->get();
    }
}
