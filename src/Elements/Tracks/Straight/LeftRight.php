<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Straight;

use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;

class LeftRight extends Straight
{
    public function getSvgElements(): array
    {
        return [
            new Left(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 1;
    }
}
