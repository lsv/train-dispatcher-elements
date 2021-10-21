<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Straight;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottom extends Straight
{
    public function getSvgElements(): array
    {
        return [
            new Top(),
            new Bottom(),
        ];
    }

    public function getType(): int
    {
        return 8;
    }
}
