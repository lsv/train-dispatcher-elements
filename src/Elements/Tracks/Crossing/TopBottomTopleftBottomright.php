<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopBottomTopleftBottomright extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new Bottom(),
            new TopLeft(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 25;
    }
}
