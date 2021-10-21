<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class LeftTopright extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new Left(),
            new TopRight(),
        ];
    }

    public function getType(): int
    {
        return 4;
    }
}
