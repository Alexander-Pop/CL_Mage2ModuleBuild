<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command class.
 */
class PrintHello extends Command
{
    public function __construct(
        
    ) {
        parent::__construct();
    }

    protected function configure() {
        $this->setName('footest:hello');
        $this->setDescription('footest:hello');
        parent::configure();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln("Hello World!!!");
    }
}
