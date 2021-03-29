<?php

namespace arjak\DaemonBundle\Traits\CommandTraits;

use ReflectionClass;
use ReflectionException;

/**
 * Trait GetCommandInfoTrait
 * @package arjak\DaemonBundle\Traits\CommandTraits
 */
trait GetCommandInfoTrait
{
    /**
     * @return string
     */
    abstract protected static function getNameEnum() : string;

    /**
     * @return string
     */
    abstract protected static function getLocalizationBlockName() : string;

    /**
     * @param string $nameProperty
     * @return array|null
     * @throws ReflectionException
     */
    public static function getListSignals(string $nameProperty): ?array
    {
        $reflectionClass = new ReflectionClass(static::getNameEnum());
        return $reflectionClass->getStaticPropertyValue($nameProperty, null);
    }

    /**
     * @param string $signal
     * @param string $nameProperty
     * @return string|null
     * @throws ReflectionException
     */
    public static function getSignalByAlias(string $signal, string $nameProperty): ?string
    {
        $reflectionClass = new ReflectionClass(static::getNameEnum());
        $property = $reflectionClass->getStaticPropertyValue($nameProperty, null);
        if (is_null($property)) {
            return null;
        }

        if (!array_key_exists($signal, $property)) {
            return null;
        }

        return $property[$signal];
    }
}
