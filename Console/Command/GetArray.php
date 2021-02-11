<?php

namespace Funami\Getarray\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetArray extends Command
{

    protected $_bankTransferPaymentNetworks;
    public function __construct(
        string $data = null,
        array $bankTransferPaymentNetworks = []
    )
    {
        $this->_bankTransferPaymentNetworks = $bankTransferPaymentNetworks;
        parent::__construct($data);
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('fu:getarray');
        $this->setDescription('Get array from di.xml');
        parent::configure();
    }

    /**
     * CLI command description
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        // todo: implement CLI command logic here
        $output->write("Gelli\n");
        $output->write(var_dump($this->_bankTransferPaymentNetworks));
    }
}
