<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;

class DoubleLeft extends Signal
{
    public function getSvgElements(): array
    {
        return [
            ...SignalElements::getDoubleSignal('left'),
            ...SignalElements::getLeftPole(),
        ];
    }

    public function getConnections(): array
    {
        return [
            Connections::CONNECT_LEFT,
        ];
    }

    public function getType(): int
    {
        return 19;
    }
}
