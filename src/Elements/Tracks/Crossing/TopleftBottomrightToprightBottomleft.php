<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class TopleftBottomrightToprightBottomleft extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new TopLeft(),
            new BottomRight(),
            new TopRight(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 22;
    }
}
