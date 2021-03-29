<?php

namespace arjak\DaemonBundle\Command;

use arjak\DaemonBundle\Enums\ListSignalsForDaemonControlEnum;
use Exception;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DaemonControlCommand
 * @package arjak\DaemonBundle\Command
 */
class DaemonControlCommand extends BaseCommand
{
    const NAME_COMMAND = 'daemon:control';
    const ALIASES_OPTIONS = 'arrSignals';
    const ALIAS_DESCRIPTION = 'arrDescription';

    /** @var bool $needOptions */
    protected bool $optionsRequired = true;

    protected function configure()
    {
        $arrConfigures = $this->getConfigurationsCommands(self::ALIASES_OPTIONS);
        $command = $this
            ->setName(self::NAME_COMMAND)
            ->setDescription($arrConfigures[self::DESCRIPTION]);

        if (is_null($arrConfigures[self::ALIASES_OPTIONS])) {
            throw new Exception('error');
        }

        $this->listOptions = $arrConfigures[self::ALIASES_OPTIONS];
        foreach ($this->listOptions as $listOption) {
            $aliasLocalization = ListSignalsForDaemonControlEnum::getSignalByAlias($listOption, self::ALIAS_DESCRIPTION);
            $description = ListSignalsForDaemonControlEnum::getLocalization($aliasLocalization);
            $command->addOption($listOption, $listOption[0], null, $description);
        }

        $helpDescription = ListSignalsForDaemonControlEnum::getLocalization(self::MAIN_DESCRIPTION);
        $command->setHelp($helpDescription);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws Exception
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->validationOption($input);
        parent::interact($input, $output);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return 0;
    }

}
