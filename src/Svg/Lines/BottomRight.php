<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Svg\SvgElement;

class BottomRight extends AbstractLines
{
    public float $x2 = SvgElement::FULL_WIDTH;
    public float $y2 = SvgElement::FULL_WIDTH;

    public function getConnection(): ?string
    {
        return Connections::CONNECT_BOTTOM_RIGHT;
    }
}
