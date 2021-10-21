<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Elements\Tracks\Tracks;

abstract class StraightDiagonal extends Tracks
{
    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_STRAIGHT_DIAGONAL;
    }
}
