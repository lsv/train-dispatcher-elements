<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Straight;

use Lsv\TrainDirectorElements\Elements\Tracks\Tracks;

abstract class Straight extends Tracks
{
    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_STRAIGHT;
    }
}
