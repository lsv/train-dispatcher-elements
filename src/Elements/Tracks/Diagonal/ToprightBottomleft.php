<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Diagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class ToprightBottomleft extends Diagonal
{
    public function getSvgElements(): array
    {
        return [
            new TopRight(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 3;
    }
}
