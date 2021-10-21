<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\SignalElements;
use Lsv\TrainDirectorElements\Svg\Circle\SingleSignal;

class SingleRight extends Signal
{
    public function getSvgElements(): array
    {
        return [
            new SingleSignal(),
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
        return 16;
    }
}
