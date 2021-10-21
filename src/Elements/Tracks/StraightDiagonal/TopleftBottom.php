<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopleftBottom extends StraightDiagonal
{
    public function getSvgElements(): array
    {
        return [
            new TopLeft(),
            new Bottom(),
        ];
    }

    public function getType(): int
    {
        return 12;
    }
}
