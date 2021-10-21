<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Split;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\TopRight;

class LeftToprightBottomright extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Left(),
            new TopRight(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 10;
    }
}
