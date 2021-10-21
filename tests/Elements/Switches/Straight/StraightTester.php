<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches\Straight;

use Lsv\TrainDirectorElements\Tests\Elements\Switches\SwitchTester;

abstract class StraightTester extends SwitchTester
{
    public function getNumberOfSvgElements(): int
    {
        return 4;
    }

    public function getNumberOfConnections(): int
    {
        return 3;
    }
}
