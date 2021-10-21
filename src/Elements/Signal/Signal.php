<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Signal;

use Lsv\TrainDirectorElements\Elements\AbstractElement;

abstract class Signal extends AbstractElement
{
    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_SIGNAL;
    }

    public function getGroup(): int
    {
        return self::GROUP_SIGNAL;
    }
}
