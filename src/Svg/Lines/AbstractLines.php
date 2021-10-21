<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

use Lsv\TrainDirectorElements\Svg\SvgElement;
use Lsv\TrainDirectorElements\Svg\SvgLine;
use Symfony\Component\Serializer\Annotation\Ignore;

abstract class AbstractLines implements SvgLine
{
    public float $x1 = SvgElement::HALF;
    public float $x2 = SvgElement::HALF;
    public float $y1 = SvgElement::HALF;
    public float $y2 = SvgElement::HALF;
    public float $strokeWidth = SvgElement::STROKE_WIDTH;
    public string $stroke = SvgElement::FILL;
    public string $fill = SvgElement::FILL;
    /**
     * @Ignore
     */
    public bool $addConnection = true;
    public string $type = SvgElement::TYPE_LINE;

    public function getX1(): float
    {
        return $this->x1;
    }

    public function getX2(): float
    {
        return $this->x2;
    }

    public function getY1(): float
    {
        return $this->y1;
    }

    public function getY2(): float
    {
        return $this->y2;
    }

    public function getStrokeWidth(): float
    {
        return $this->strokeWidth;
    }

    public function getStroke(): string
    {
        return $this->stroke;
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
