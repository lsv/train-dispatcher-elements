<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches;

use Lsv\TrainDirectorElements\Elements\Element;
use Lsv\TrainDirectorElements\Tests\Elements\ElementTester;

abstract class SwitchTester extends ElementTester
{
    public function getGroup(): int
    {
        return Element::GROUP_SWITCH;
    }

    public function getElementGroup(): string
    {
        return Element::ELEMENT_GROUP_SWITCH;
    }
}
