<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Tests\Elements\Switches\SwitchTester;

class BottomleftToprightLeftRightTest extends SwitchTester
{
    public function getNumberOfSvgElements(): int
    {
        return 5;
    }

    public function getNumberOfConnections(): int
    {
        return 4;
    }

    public function getType(): int
    {
        return 8;
    }
}
