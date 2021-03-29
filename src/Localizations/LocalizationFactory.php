<?php

namespace arjak\DaemonBundle\Localizations;

use arjak\DaemonBundle\Interfaces\LocalizationsInterface;
use arjak\DaemonBundle\Localizations\en\EnLocalization;
use arjak\DaemonBundle\Localizations\ru\RuLocalization;

/**
 * Class LocalizationFactory
 * @package arjak\DaemonBundle\Localizations
 */
class LocalizationFactory
{
    /**
     * @param string $localization
     * @return LocalizationFactory|null
     */
    public function getLocalization(string $localization) : ?LocalizationsInterface
    {
        switch ($localization) {
            case 'en':
                return new EnLocalization();
            case 'ru':
                return new RuLocalization();
            default:
                return null;
        }
    }
}
