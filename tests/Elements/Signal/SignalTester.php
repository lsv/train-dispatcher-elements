<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\Element;
use Lsv\TrainDirectorElements\Tests\Elements\ElementTester;

abstract class SignalTester extends ElementTester
{
    public function getGroup(): int
    {
        return Element::GROUP_SIGNAL;
    }

    public function getElementGroup(): string
    {
        return Element::ELEMENT_GROUP_SIGNAL;
    }

    public function getNumberOfConnections(): int
    {
        return 1;
    }

    public function getNumberOfSvgElements(): int
    {
        return 4;
    }
}
