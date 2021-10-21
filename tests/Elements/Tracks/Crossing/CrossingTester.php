<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks\Crossing;

use Lsv\TrainDirectorElements\Elements\Element;
use Lsv\TrainDirectorElements\Tests\Elements\Tracks\TrackTester;

abstract class CrossingTester extends TrackTester
{
    public function getElementGroup(): string
    {
        return Element::ELEMENT_GROUP_CROSSING;
    }
}
