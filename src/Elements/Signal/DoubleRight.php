<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;

class DoubleRight extends Signal
{
    public function getSvgElements(): array
    {
        return [
            ...SignalElements::getDoubleSignal('right'),
            ...SignalElements::getRightPole(),
        ];
    }

    public function getConnections(): array
    {
        return [
            Connections::CONNECT_RIGHT,
        ];
    }

    public function getType(): int
    {
        return 18;
    }
}
