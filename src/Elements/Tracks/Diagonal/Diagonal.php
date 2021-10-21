<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks\Diagonal;

use Lsv\TrainDirectorElements\Elements\Tracks\Tracks;

abstract class Diagonal extends Tracks
{
    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_DIAGONAL;
    }
}
