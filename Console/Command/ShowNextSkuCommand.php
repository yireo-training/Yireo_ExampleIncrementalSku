<?php

declare(strict_types=1);

namespace Yireo\ExampleIncrementalSku\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yireo\ExampleIncrementalSku\Model\ProductManager;

class ShowNextSkuCommand extends Command
{
    /**
     * @var ProductManager
     */
    private $productManager;

    /**
     * ProductManagerCommand constructor.
     * @param ProductManager $productManager
     * @param string|null $name
     */
    public function __construct(
        ProductManager $productManager,
        string $name = null
    ) {
        parent::__construct($name);
        $this->productManager = $productManager;
    }

    /**
     * Configure command
     */
    protected function configure()
    {
        $this->setName('yireo:show_next_sku')->setDescription('Tunda example - show the next SKU to be generated');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $newProduct = $this->productManager->getNewProduct();
        $output->writeln('Next product will have SKU: '.$newProduct->getSku());
    }
}
