<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Circle;

use Lsv\TrainDirectorElements\Svg\SvgElement;

class SingleSignal extends AbstractCircle
{
    public string $fill = SvgElement::FILL;
    public float $radius = SvgElement::SIGNAL_CIRCLE_RADIUS;
}
