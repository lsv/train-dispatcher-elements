<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches\Split;

use Lsv\TrainDirectorElements\Tests\Elements\Switches\SwitchTester;

class TopleftToprightBottomTest extends SwitchTester
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
        return 22;
    }
}
