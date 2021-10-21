<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Split;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class TopleftToprightBottom extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new TopLeft(),
            new TopRight(),
            new Bottom(),
        ];
    }

    public function getType(): int
    {
        return 22;
    }
}
