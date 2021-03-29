<?php

namespace arjak\DaemonBundle\Localizations\ru;

use arjak\DaemonBundle\Interfaces\LocalizationsInterface;
use arjak\DaemonBundle\Localizations\LocalizationFactory;
use arjak\DaemonBundle\Traits\LocalizationsTrait;

/**
 * Class RuLocalization
 * @package arjak\DaemonBundle\Localizations\ru
 */
class RuLocalization extends LocalizationFactory implements LocalizationsInterface
{
    use LocalizationsTrait;

    const CONSOLE_COMMAND_BLOCK = 'console-localization';

    /**
     * @var array|string[][]
     */
    private array $localizations = [
        self::CONSOLE_COMMAND_BLOCK => [
            'description' => 'Управление демоном',
            'main-description' => 'Набор консольных команд для управления состоянием демона, доступные флаги -s, -r, -c',
            'start-description' => 'Запускает демона в отдельном процессе',
            'reload-description' => 'Перезагружает демона',
            'close-description' => 'Остановить демона',
            'status-description' => 'Показывает статус демона',
            'log-description' => 'Показать log файл демона',
            'used-memory-description' => 'Показывает сколько памяти использует демон на текущий момент',
            'get-max-memory-description' => 'Показать максимально доступное количество памяти для демона',
            'get-used-threads-description' => 'Показывает сколько потоков использует демон на данный момент',
            'get-max-threads-description' => 'Показать максимальное количество потоков доступное демону'
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
