<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottomleft extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 11;
    }
}
