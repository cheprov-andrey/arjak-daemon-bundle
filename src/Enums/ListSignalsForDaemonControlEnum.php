<?php

namespace arjak\DaemonBundle\Enums;

use arjak\DaemonBundle\Interfaces\CommandInterfaces\SignalCommandInterface;
use arjak\DaemonBundle\Traits\CommandTraits\GetCommandInfoTrait;

/**
 * Class ListSignalsForDaemonControlEnum
 * @package arjak\DaemonBundle\Enums
 */
class ListSignalsForDaemonControlEnum extends BaseEnum implements SignalCommandInterface
{
    use GetCommandInfoTrait;

    const START = 'start';
    const RELOAD = 'reload';
    const CLOSE = 'close';
    const MAIN = 'main';
    const DESCRIPTION = 'description';

    /**
     * @var array|string[] $arrDescription
     */
    private static array $arrDescription = [
        self::START => 'start-description',
        self::RELOAD => 'reload-description',
        self::CLOSE => 'close-description',
        self::MAIN => 'main-description',
        self::DESCRIPTION => 'description',
    ];

    /**
     * @var array|string[] $arrSignals
     */
    private static array $arrSignals = [
        self::START => 'start',
        self::RELOAD => 'reload',
        self::CLOSE => 'close'
    ];

    /**
     * @return string
     */
    protected static function getNameEnum(): string
    {
        return ListSignalsForDaemonControlEnum::class;
    }

    /**
     * @return string
     */
    protected static function getLocalizationBlockName(): string
    {
        return 'console-localization';
    }
}
