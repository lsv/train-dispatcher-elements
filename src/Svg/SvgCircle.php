<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg;

interface SvgCircle extends SvgElement
{
    public function getCX(): float;

    public function getCY(): float;

    public function getRadius(): float;

    public function getFill(): string;
}
