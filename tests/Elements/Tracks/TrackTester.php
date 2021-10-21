<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks;

use Lsv\TrainDirectorElements\Elements\Element;
use Lsv\TrainDirectorElements\Tests\Elements\ElementTester;

abstract class TrackTester extends ElementTester
{
    public function getGroup(): int
    {
        return Element::GROUP_TRACK;
    }
}
