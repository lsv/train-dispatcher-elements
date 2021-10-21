<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Right;

class LeftRightBottomright extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Left(),
            new Right(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 2;
    }
}
