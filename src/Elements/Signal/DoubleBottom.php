<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;

class DoubleBottom extends Signal
{
    public function getSvgElements(): array
    {
        return [
            ...SignalElements::getDoubleSignal('bottom'),
            ...SignalElements::getBottomPole(),
        ];
    }

    public function getConnections(): array
    {
        return [
            Connections::CONNECT_BOTTOM,
        ];
    }

    public function getType(): int
    {
        return 2;
    }
}
