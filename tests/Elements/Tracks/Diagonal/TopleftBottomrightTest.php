<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks\Diagonal;

class TopleftBottomrightTest extends DiagonalTester
{
    public function getNumberOfSvgElements(): int
    {
        return 2;
    }

    public function getNumberOfConnections(): int
    {
        return 2;
    }

    public function getType(): int
    {
        return 2;
    }
}
