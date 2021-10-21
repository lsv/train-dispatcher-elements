<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements;

abstract class AbstractElement implements Element
{
    public function getName(): string
    {
        return static::class;
    }
}
