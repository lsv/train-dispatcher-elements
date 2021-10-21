<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopleftRight extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new TopLeft(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 6;
    }
}
