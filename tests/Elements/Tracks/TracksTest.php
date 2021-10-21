<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements\Tracks;

use Lsv\TrainDirectorElements\Elements\Connections;
use Lsv\TrainDirectorElements\Elements\Tracks\Tracks;
use Lsv\TrainDirectorElements\Svg\Circle\SingleSignal;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use PHPUnit\Framework\TestCase;

class TracksTest extends TestCase
{
    /**
     * @var Tracks
     */
    private $class;

    protected function setUp(): void
    {
        $this->class = new class() extends Tracks {
            public function getSvgElements(): array
            {
                return [
                    new SingleSignal(),
                    new Left(),
                ];
            }

            public function getType(): int
            {
                return 1;
            }

            public function getElementGroup(): string
            {
                return 'group';
            }
        };
    }

    public function testWillGetCorrectConnections(): void
    {
        self::assertSame(
            [
                Connections::CONNECT_LEFT,
            ],
            $this->class->getConnections()
        );
    }
}
