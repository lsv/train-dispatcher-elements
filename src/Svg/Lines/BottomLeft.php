<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Svg\SvgElement;

class BottomLeft extends AbstractLines
{
    public float $y2 = SvgElement::FULL_WIDTH;
    public float $x2 = 0;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_BOTTOM_LEFT;
    }
}
