<?php

namespace arjak\DaemonBundle\Command;

use arjak\DaemonBundle\DaemonBundle;
use arjak\DaemonBundle\DaemonKernel;
use arjak\DaemonBundle\Enums\ListSignalsForDaemonControlEnum;
use arjak\DaemonBundle\Tools\ServiceProvider;
use Exception;
use Psr\Container\ContainerInterface;
use ReflectionException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class BaseCommand
 * @package arjak\DaemonBundle\Command
 */
class BaseCommand extends Command
{
    const MAIN_DESCRIPTION = 'main-description';
    const DESCRIPTION = 'description';

    /** @var ContainerInterface */
    protected ContainerInterface $container;
    /** @var ServiceProvider */
    protected ServiceProvider $serviceProvider;
    /** @var array $listOptions */
    protected array $listOptions;
    /** @var bool $optionsRequired */
    protected bool $optionsRequired = false;
    /** @var bool $isMultipleOptions */
    protected bool $isMultipleOptions = false;

    public function __construct(ContainerInterface $container, ServiceProvider $serviceProvider, string $name = null)
    {
        $this->serviceProvider = $serviceProvider;
        DaemonBundle::setServiceProvider($this->serviceProvider);
        parent::__construct($name);
        $this->container = $container;
    }

    protected function configure()
    {
        $this
            ->setName('base:run')
            ->setDescription('Just a base command.')
            ->setHelp('Really this is just a base command...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Base command is OK');
        return 1;
    }

    /**
     * @return DaemonKernel
     */
    protected function getApp(): DaemonKernel
    {
        return $this->container->get('DaemonKernel');
    }

    /**
     * @return string
     */
    protected function getProjectDir() : string
    {
        return $this->getApp()->getProjectDir();
    }

    /**
     * @param string|null $aliasOptions
     * @param string|null $aliasArguments
     * @return array
     * @throws ReflectionException
     */
    protected function getConfigurationsCommands(?string $aliasOptions = null, ?string $aliasArguments = null) : array
    {
        $description = ListSignalsForDaemonControlEnum::getLocalization(self::DESCRIPTION);

        if (!is_null($aliasOptions)) {
            $listOptions = ListSignalsForDaemonControlEnum::getListSignals($aliasOptions);
        }

        if (!is_null($aliasArguments)) {
            $listArguments = ListSignalsForDaemonControlEnum::getListSignals($aliasArguments);
        }

        return [
            self::DESCRIPTION => $description,
            $aliasOptions => $listOptions ?? null,
            $aliasArguments => $listArguments ?? null
        ];
    }

    /**
     * @param InputInterface $input
     * @throws Exception
     */
    protected function validationOption(InputInterface $input) : void
    {
        if (is_null($this->listOptions)) {
            return;
        }

        $countOptions = 0;
        foreach ($this->listOptions as $option) {
            if ($input->hasOption($option)) {
                if ($input->getOption($option)) {
                    $countOptions++;
                }
            } else {
                throw new Exception('error1');
            }
        }

        if (!$this->optionsRequired) {
            return;
        }

        if ($this->isMultipleOptions) {
            if ($countOptions < 1) {
                throw new Exception('error');
            }
        } else {
            if ($countOptions < 1 || $countOptions >= 2) {
                throw new Exception('error');
            }
        }
    }
}
