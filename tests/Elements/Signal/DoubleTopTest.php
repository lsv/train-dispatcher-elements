<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Signal;

class DoubleTopTest extends SignalTester
{
    public function getType(): int
    {
        return 3;
    }
}
