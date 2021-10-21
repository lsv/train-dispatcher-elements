<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class LeftRightTopleftBottomright extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new Left(),
            new Right(),
            new TopLeft(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 20;
    }
}
