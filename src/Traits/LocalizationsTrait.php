<?php

namespace arjak\DaemonBundle\Traits;

/**
 * Trait LocalizationsTrait
 * @package arjak\DaemonBundle\Traits
 */
trait LocalizationsTrait
{
    abstract public function getArrayLocalizations() : array;

    /**
     * @param string $blockName
     * @param string $alias
     * @return string|null
     */
    public function byAlias(string $blockName, string $alias): ?string
    {
        $arrayLocalizations = $this->getArrayLocalizations();

        if (!array_key_exists($blockName, $arrayLocalizations)) {
            return null;
        }

        if (!array_key_exists($alias, $arrayLocalizations[$blockName])) {
            return null;
        }

        return $arrayLocalizations[$blockName][$alias];
    }

    /**
     * @param string $blockName
     * @return array|null
     */
    public function byBlockName(string $blockName): ?array
    {
        $arrayLocalizations = $this->getArrayLocalizations();

        if (!array_key_exists($blockName, $arrayLocalizations)) {
            return null;
        }

        return $arrayLocalizations[$blockName];
    }

    /**
     * @param string $blockName
     * @param array $arrayAliases
     * @return array|null
     */
    public function byArrayAliases(string $blockName, array $arrayAliases): ?array
    {
        $arrayLocalizations = $this->getArrayLocalizations();
        if (!array_key_exists($blockName, $arrayLocalizations)) {
            return null;
        }

        $arrDescriptions = [];
        foreach ($arrayAliases as $key => $alias) {
            if (!array_key_exists($alias, $arrayLocalizations[$blockName])) {
                continue;
            }
            $arrDescriptions[$alias] = $arrayLocalizations[$blockName][$alias];
        }

        if (count($arrDescriptions) < 1) {
            return null;
        }

        return $arrDescriptions;
    }
}
