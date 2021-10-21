<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Svg\Lines;

use Lsv\TrainDirectorElements\Svg\Lines\Line;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    public function testConnection(): void
    {
        $line = new Line();
        self::assertNull($line->getConnection());
        self::assertFalse($line->addConnection);
        self::assertEquals(30, $line->getX1());
        self::assertEquals(30, $line->getX2());
        self::assertEquals(30, $line->getY1());
        self::assertEquals(30, $line->getY2());
        self::assertEquals(12, $line->getStrokeWidth());
        self::assertSame('#000000', $line->getStroke());
        self::assertSame('#000000', $line->getFill());
        self::assertSame($line::class, $line->getName());
        self::assertSame('line', $line->getType());
    }
}
