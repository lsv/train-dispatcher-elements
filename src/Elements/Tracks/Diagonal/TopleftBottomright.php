<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Diagonal;

use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopleftBottomright extends Diagonal
{
    public function getSvgElements(): array
    {
        return [
            new TopLeft(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 2;
    }
}
