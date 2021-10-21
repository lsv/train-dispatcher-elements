<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;
use Lsv\TrainDirectorElements\Svg\Circle\SingleSignal;

class SingleLeft extends Signal
{
    public function getSvgElements(): array
    {
        return [
            new SingleSignal(),
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
        return 17;
    }
}
