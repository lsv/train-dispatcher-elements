<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class TopBottomBottomleftTopright extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Top(),
            new Bottom(),
            new BottomLeft(),
            new TopRight(),
        ];
    }

    public function getType(): int
    {
        return 16;
    }
}
