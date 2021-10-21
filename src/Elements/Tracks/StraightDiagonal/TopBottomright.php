<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottomright extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 13;
    }
}
