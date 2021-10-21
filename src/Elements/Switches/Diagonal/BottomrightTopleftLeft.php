<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class BottomrightTopleftLeft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new BottomRight(),
            new TopLeft(),
            new Left(),
        ];
    }

    public function getType(): int
    {
        return 7;
    }
}
