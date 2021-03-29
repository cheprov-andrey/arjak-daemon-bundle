<?php

namespace arjak\DaemonBundle\Interfaces\CommandInterfaces;

/**
 * Interface SignalCommandInterface
 * @package arjak\DaemonBundle\Interfaces\CommandInterfaces
 */
interface SignalCommandInterface
{
    /**
     * @param string $nameProperty
     * @return array
     */
    public static function getListSignals(string $nameProperty) : ?array;

    /**
     * @param string $signal
     * @param string $nameProperty
     * @return string|null
     */
    public static function getSignalByAlias(string $signal, string $nameProperty) : ?string;

}
