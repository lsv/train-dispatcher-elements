<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Left;

class LeftBottomright extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new Left(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 5;
    }
}
