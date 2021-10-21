<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;

class DoubleTop extends Signal
{
    public function getSvgElements(): array
    {
        return [
            ...SignalElements::getDoubleSignal('top'),
            ...SignalElements::getTopPole(),
        ];
    }

    public function getConnections(): array
    {
        return [
            Connections::CONNECT_TOP,
        ];
    }

    public function getType(): int
    {
        return 3;
    }
}
