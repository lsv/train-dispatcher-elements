<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Svg\SvgElement;

class TopRight extends AbstractLines
{
    public float $y1 = 0;
    public float $x1 = SvgElement::FULL_WIDTH;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_TOP_RIGHT;
    }
}
