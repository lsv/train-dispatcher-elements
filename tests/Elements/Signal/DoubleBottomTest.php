<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Signal;

class DoubleBottomTest extends SignalTester
{
    public function getType(): int
    {
        return 2;
    }
}
