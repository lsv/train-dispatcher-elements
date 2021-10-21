<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;

class Top extends AbstractLines
{
    public float $y2 = 0;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_TOP;
    }
}
