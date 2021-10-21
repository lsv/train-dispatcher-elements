<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Right;

class BottomleftRight extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new BottomLeft(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 7;
    }
}
