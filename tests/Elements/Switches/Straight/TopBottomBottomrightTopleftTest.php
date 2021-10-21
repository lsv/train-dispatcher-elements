<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Switches\Straight;

class TopBottomBottomrightTopleftTest extends StraightTester
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
        return 17;
    }
}
