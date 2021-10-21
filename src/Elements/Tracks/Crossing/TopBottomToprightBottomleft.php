<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class TopBottomToprightBottomleft extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new Bottom(),
            new TopRight(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 24;
    }
}
