<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class BottomleftToprightRight extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new BottomLeft(),
            new TopRight(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 4;
    }
}
