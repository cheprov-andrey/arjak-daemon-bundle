<?php

namespace arjak\DaemonBundle\Command;

use \Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DefaultCommand
 * @package arjak\DaemonBundle\Command
 */
class DefaultCommand extends Command
{
    protected function configure()
    {

    }

    /**
     * @param InputInterface $test
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $test, OutputInterface $output)
    {

        return 0;
    }

}
