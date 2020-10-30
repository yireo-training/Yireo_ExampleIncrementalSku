<?php

declare(strict_types=1);

namespace Yireo\ExampleIncrementalSku\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yireo\ExampleIncrementalSku\Util\GetLastSku;

class ShowLastSkuCommand extends Command
{
    /**
     * @var GetLastSku
     */
    private $getLastSku;

    /**
     * ProductManagerCommand constructor.
     * @param GetLastSku $getLastSku
     * @param string|null $name
     */
    public function __construct(
        GetLastSku $getLastSku,
        string $name = null
    ) {
        parent::__construct($name);
        $this->getLastSku = $getLastSku;
    }

    /**
     * Configure command
     */
    protected function configure()
    {
        $this->setName('yireo:show_last_sku')->setDescription('Tunda example - show the last SKU to be generated');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $lastSku = $this->getLastSku->get();
        $output->writeln('Last product has SKU: '.$lastSku);
    }
}
