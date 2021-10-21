<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottomBottomleft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Top(),
            new Bottom(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 12;
    }
}
