<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Split;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopleftBottomleftRight extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new TopLeft(),
            new BottomLeft(),
            new Right(),
        ];
    }

    public function getType(): int
    {
        return 11;
    }
}
