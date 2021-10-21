<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class TopToprightBottomleft extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Top(),
            new TopRight(),
            new BottomLeft(),
        ];
    }

    public function getType(): int
    {
        return 18;
    }
}
