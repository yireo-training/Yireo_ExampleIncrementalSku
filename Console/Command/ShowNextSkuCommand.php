<?php

declare(strict_types=1);

namespace YireoTraining\ExampleIncrementalSku\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use YireoTraining\ExampleIncrementalSku\Util\GetNewSku;

class ShowNextSkuCommand extends Command
{
    /**
     * @var GetNewSku
     */
    private $getNewSku;

    /**
     * ProductManagerCommand constructor.
     * @param GetNewSku $getNewSku
     * @param string|null $name
     */
    public function __construct(
        GetNewSku $getNewSku,
        string $name = null
    ) {
        parent::__construct($name);
        $this->getNewSku = $getNewSku;
    }

    /**
     * Configure command
     */
    protected function configure()
    {
        $this->setName('yireo:show_next_sku')
            ->setDescription('Yireo example - show the next SKU to be generated');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $newSku = $this->getNewSku->get();
        $output->writeln('Next product will have SKU: ' . $newSku);
    }
}
