<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class LeftRightTopleft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Left(),
            new Right(),
            new TopLeft(),
        ];
    }

    public function getType(): int
    {
        return 1;
    }
}
