<?php
namespace Yireo\ExampleIncrementalSku\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Yireo\ExampleIncrementalSku\Factory\ProductFactory;

class ProductManager
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * ProductManager constructor.
     * @param ProductRepositoryInterface $productRepository
     * @param ProductFactory $productFactory
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductFactory $productFactory
    ) {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
    }

    /**
     * @return ProductInterface
     */
    public function getNewProduct(): ProductInterface
    {
        return $this->productFactory->create();
    }

    /**
     * @param int $productId
     * @return ProductInterface
     * @throws NoSuchEntityException
     */
    public function getExistingProductById(int $productId): ProductInterface
    {
        return $this->productRepository->getById($productId);
    }
}
