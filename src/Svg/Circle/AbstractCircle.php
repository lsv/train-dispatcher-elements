<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Circle;

use Lsv\TrainDirectorElements\Svg\SvgCircle;
use Lsv\TrainDirectorElements\Svg\SvgElement;

abstract class AbstractCircle implements SvgCircle
{
    public float $cx = SvgElement::HALF;
    public float $cy = SvgElement::HALF;
    public float $radius = SvgElement::CIRCLE_RADIUS;
    public string $fill = SvgElement::RED_FILL;
    public string $type = SvgElement::TYPE_CIRCLE;

    public function getCX(): float
    {
        return $this->cx;
    }

    public function getCY(): float
    {
        return $this->cy;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getFill(): string
    {
        return $this->fill;
    }

    public function getName(): string
    {
        return static::class;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
