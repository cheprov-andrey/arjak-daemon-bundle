<?php

namespace arjak\DaemonBundle\Enums;

use arjak\DaemonBundle\DaemonBundle;

/**
 * Class BaseEnum
 * @package arjak\DaemonBundle\Enums
 */
class BaseEnum
{
    /**
     * @param string $aliasLocalization
     * @return string|null
     */
    public static function getLocalization(string $aliasLocalization) : ?string
    {
        $localizationBlockName = static::getLocalizationBlockName();
        $localizationsFactory = DaemonBundle::getServiceProvider()->localizationFactory;
        $localization = $localizationsFactory->getLocalization('ru');
        return $localization->byAlias($localizationBlockName, $aliasLocalization);
    }
}
