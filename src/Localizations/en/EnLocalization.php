<?php

namespace arjak\DaemonBundle\Localizations\en;

use arjak\DaemonBundle\Interfaces\LocalizationsInterface;
use arjak\DaemonBundle\Localizations\LocalizationFactory;
use arjak\DaemonBundle\Traits\LocalizationsTrait;

/**
 * Class EnLocalization
 * @package arjak\DaemonBundle\Localizations\en
 */
class EnLocalization extends LocalizationFactory implements LocalizationsInterface
{
    use LocalizationsTrait;

    const CONSOLE_COMMAND_BLOCK = 'console-localization';

    /**
     * @var array|string[][]
     */
    private array $localizations = [
        self::CONSOLE_COMMAND_BLOCK => [
            'description' => 'Demon control',
            'main-description' => 'A set of console commands for managing the state of the daemon, available flags -s, -r, -c',
            'start-description' => 'Starting the daemon in a separate process',
            'reload-description' => 'Reloads the demon',
            'close-description' => 'Stop the demon',
            'status-description' => 'Shows demon status',
            'log-description' => 'Show daemon log file',
            'usedMemory-description' => 'Shows how much memory the daemon is currently using',
            'getMaxMemory-description' => 'Show the maximum available memory for the daemon',
            'getUsedThreads-description' => 'Shows how many threads the daemon is currently using',
            'getMaxThreads-description' => 'Show the maximum number of threads available to the daemon'
        ],
    ];

    /**
     * @return array|string[][]
     */
    public function getArrayLocalizations(): array
    {
        return $this->localizations;
    }
}
