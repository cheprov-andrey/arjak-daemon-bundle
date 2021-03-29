<?php

namespace arjak\DaemonBundle\Enums;

use arjak\DaemonBundle\Interfaces\CommandInterfaces\SignalCommandInterface;
use arjak\DaemonBundle\Traits\CommandTraits\GetCommandInfoTrait;

/**
 * Class ListSignalsForGetDaemonStateEnum
 * @package arjak\DaemonBundle\Enums
 */
class ListSignalsForGetDaemonStateEnum extends BaseEnum implements SignalCommandInterface
{
    use GetCommandInfoTrait;

    const GET_STATUS = 'get-status';
    const GET_LOG_INFO = 'get-log-info';
    const GET_USED_MEMORY = 'used-memory';
    const GET_MAX_MEMORY = 'get-max-memory';
    const GET_USED_THREADS = 'get-used-threads';
    const GET_MAX_THREADS = 'get-max-threads';

    /**
     * @var array|string[] $arrDescription
     */
    private static array $arrDescription = [
        self::GET_STATUS => 'status-description',
        self::GET_LOG_INFO => 'log-description',
        self::GET_USED_MEMORY => 'used-memory-description',
        self::GET_MAX_MEMORY => 'get-max-memory-description',
        self::GET_USED_THREADS => 'get-used-threads-description',
        self::GET_MAX_THREADS => 'get-max-threads-description'
    ];

    /**
     * @var array|string[]
     */
    private static array $arrSignals = [
        self::GET_STATUS => 'status',
        self::GET_LOG_INFO => 'log',
        self::GET_USED_MEMORY => 'usedMemory',
        self::GET_MAX_MEMORY => 'getMaxMemory',
        self::GET_USED_THREADS => 'getUsedThreads',
        self::GET_MAX_THREADS => 'getMaxThreads'
    ];

    /**
     * @return string
     */
    protected static function getNameEnum(): string
    {
        return ListSignalsForGetDaemonStateEnum::class;
    }

    /**
     * @return string
     */
    protected static function getLocalizationBlockName(): string
    {
        return 'console-localization';
    }
}
