<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg;

interface SvgLine extends SvgElement
{
    public function getX1(): float;

    public function getX2(): float;

    public function getY1(): float;

    public function getY2(): float;

    public function getStrokeWidth(): float;

    public function getStroke(): string;

    public function getFill(): string;

    public function getConnection(): ?string;
}
