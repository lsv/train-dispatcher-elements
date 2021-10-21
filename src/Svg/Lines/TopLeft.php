<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;

class TopLeft extends AbstractLines
{
    public float $x1 = 0;
    public float $y1 = 0;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_TOP_LEFT;
    }
}
