<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;

class LeftRightBottomleft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Left(),
            new Right(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 3;
    }
}
