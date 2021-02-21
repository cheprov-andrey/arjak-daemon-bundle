<?php

namespace arjak\DaemonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DaemonBundle
 * @package arjak\DaemonBundle
 */
class DaemonBundle extends Bundle
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}
