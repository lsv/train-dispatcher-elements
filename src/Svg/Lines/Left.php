<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;

class Left extends AbstractLines
{
    public float $x1 = 0;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_LEFT;
    }
}
