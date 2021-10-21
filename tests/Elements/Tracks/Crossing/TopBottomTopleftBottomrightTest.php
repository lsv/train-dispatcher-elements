<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks\Crossing;

class TopBottomTopleftBottomrightTest extends CrossingTester
{
    public function getNumberOfSvgElements(): int
    {
        return 4;
    }

    public function getNumberOfConnections(): int
    {
        return 4;
    }

    public function getType(): int
    {
        return 25;
    }
}
