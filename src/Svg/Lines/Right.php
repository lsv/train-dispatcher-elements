<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Svg\SvgElement;

class Right extends AbstractLines
{
    public float $x1 = SvgElement::FULL_WIDTH;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_RIGHT;
    }
}
