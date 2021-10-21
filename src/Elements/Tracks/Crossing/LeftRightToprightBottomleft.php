<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class LeftRightToprightBottomleft extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new Left(),
            new Right(),
            new TopRight(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 21;
    }
}
