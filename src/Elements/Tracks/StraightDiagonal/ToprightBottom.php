<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class ToprightBottom extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new TopRight(),
            new Bottom(),
        ];
    }

    public function getType(): int
    {
        return 14;
    }
}
