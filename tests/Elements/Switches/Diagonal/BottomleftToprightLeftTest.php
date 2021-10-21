<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches\Diagonal;

use Lsv\TrainDirectorElements\Tests\Elements\Switches\SwitchTester;

class BottomleftToprightLeftTest extends SwitchTester
{
    public function getNumberOfSvgElements(): int
    {
        return 4;
    }

    public function getNumberOfConnections(): int
    {
        return 3;
    }

    public function getType(): int
    {
        return 5;
    }
}
