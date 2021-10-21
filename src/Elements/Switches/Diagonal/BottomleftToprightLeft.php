<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class BottomleftToprightLeft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new BottomLeft(),
            new TopRight(),
            new Left(),
        ];
    }

    public function getType(): int
    {
        return 5;
    }
}
