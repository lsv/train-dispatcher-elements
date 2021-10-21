<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class BottomrightTopleftRight extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new BottomRight(),
            new TopLeft(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 6;
    }
}
