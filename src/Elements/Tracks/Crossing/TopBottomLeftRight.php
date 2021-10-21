<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottomLeftRight extends Crossing
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new Bottom(),
            new Left(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 23;
    }
}
