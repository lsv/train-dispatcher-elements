<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg;

interface SvgElement
{
    public const FULL_WIDTH = 60;
    public const HALF = self::FULL_WIDTH / 2;
    public const STROKE_WIDTH = 12;
    public const SIGNAL_POLE_WIDTH = self::STROKE_WIDTH / 2.5;
    public const FILL = '#000000';
    public const RED_FILL = '#ff0000';
    public const CIRCLE_RADIUS = self::STROKE_WIDTH / 2;
    public const SIGNAL_CIRCLE_RADIUS = self::CIRCLE_RADIUS * 1.5;
    public const SIGNAL_POLE_SIZE = self::SIGNAL_POLE_WIDTH * 4;
    public const TYPE_CIRCLE = 'circle';
    public const TYPE_LINE = 'line';

    public function getName(): string;

    public function getType(): string;
}
