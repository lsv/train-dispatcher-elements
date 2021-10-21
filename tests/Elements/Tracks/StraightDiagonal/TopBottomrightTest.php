<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks\StraightDiagonal;

class TopBottomrightTest extends StraightDiagonalTester
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
        return 13;
    }
}
