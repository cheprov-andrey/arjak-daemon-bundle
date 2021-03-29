<?php

namespace arjak\DaemonBundle\Interfaces;

/**
 * Interface LocalizationsInterface
 * @package arjak\DaemonBundle\Interfaces
 */
interface LocalizationsInterface
{
    /**
     * @param string $blockName
     * @param string $alias
     * @return string|null
     */
    public function byAlias(string $blockName, string $alias): ?string;

    /**
     * @param string $blockName
     * @return array|null
     */
    public function byBlockName(string $blockName): ?array;

    /**
     * @param string $blockName
     * @param array $arrayAliases
     * @return array|null
     */
    public function byArrayAliases(string $blockName, array $arrayAliases): ?array;

    /**
     * @return array
     */
    public function getArrayLocalizations() : array;
}
