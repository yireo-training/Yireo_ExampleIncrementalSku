<?php declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Util;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrderFactory;
use YireoTraining\ExampleIncrementalSku\Api\SkuGeneratorInterface;

class GetNewSku
{
    /**
     * @var GetLastSku
     */
    private $getLastSku;

    /**
     * @var SkuGeneratorInterface
     */
    private $skuGenerator;

    /**
     * GetNewSku constructor.
     * @param SkuGeneratorInterface $skuGenerator
     */
    public function __construct(
        GetLastSku $getLastSku,
        SkuGeneratorInterface $skuGenerator
    ) {
        $this->getLastSku = $getLastSku;
        $this->skuGenerator = $skuGenerator;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        $lastSku = $this->getLastSku->get();
        return $this->skuGenerator->generateSku($lastSku);
    }
}
