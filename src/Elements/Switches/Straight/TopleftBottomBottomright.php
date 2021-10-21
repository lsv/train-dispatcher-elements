<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\TopLeft;

class TopleftBottomBottomright extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new TopLeft(),
            new Bottom(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 21;
    }
}
