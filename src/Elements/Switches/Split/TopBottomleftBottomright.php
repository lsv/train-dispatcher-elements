<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches\Split;

use Lsv\TrainDirectorElements\Elements\Switches\AbstractSwitch;
use Lsv\TrainDirectorElements\Svg\Lines\BottomLeft;
use Lsv\TrainDirectorElements\Svg\Lines\BottomRight;
use Lsv\TrainDirectorElements\Svg\Lines\Top;

class TopBottomleftBottomright extends AbstractSwitch
{
    protected function elements(): array
    {
        return [
            new Top(),
            new BottomLeft(),
            new BottomRight(),
        ];
    }

    public function getType(): int
    {
        return 23;
    }
}
