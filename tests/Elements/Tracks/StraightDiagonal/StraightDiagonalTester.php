<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks\StraightDiagonal;

use Lsv\TrainDirectorElements\Elements\Element;
use Lsv\TrainDirectorElements\Tests\Elements\Tracks\TrackTester;

abstract class StraightDiagonalTester extends TrackTester
{
    public function getElementGroup(): string
    {
        return Element::ELEMENT_GROUP_STRAIGHT_DIAGONAL;
    }
}
