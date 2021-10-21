<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Elements\Tracks\Tracks;

abstract class Crossing extends Tracks
{
    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_CROSSING;
    }
}
