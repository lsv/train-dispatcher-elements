<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Signal;

class SingleRightTest extends SignalTester
{
    public function getNumberOfSvgElements(): int
    {
        return 3;
    }

    public function getType(): int
    {
        return 16;
    }
}
