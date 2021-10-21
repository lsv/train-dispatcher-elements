<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Svg\Circle;

use Generator;
use Lsv\TrainDirectorElements\Svg\Circle\DoubleSignal;
use Lsv\TrainDirectorElements\Svg\SvgElement;
use PHPUnit\Framework\TestCase;

class DoubleSignalTest extends TestCase
{
    public function dataProvider(): Generator
    {
        yield 'top' => [
            'top',
            SvgElement::HALF + (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
            SvgElement::HALF,
        ];

        yield 'left' => [
            'left',
            SvgElement::HALF,
            SvgElement::HALF - (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
        ];

        yield 'right' => [
            'right',
            SvgElement::HALF,
            SvgElement::HALF + (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
        ];

        yield 'bottom' => [
            'bottom',
            SvgElement::HALF - (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
            SvgElement::HALF,
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testTestPosition(string $position, float $cx, float $cy): void
    {
        $obj = new DoubleSignal($position);
        self::assertEquals($cx, $obj->cx);
        self::assertEquals($cy, $obj->cy);
        self::assertEquals($cy, $obj->getCY());
        self::assertEquals($cx, $obj->getCX());
        self::assertEquals((12 / 2) * 1.5, $obj->getRadius());
        self::assertEquals('#ff0000', $obj->getFill());
        self::assertEquals($obj::class, $obj->getName());
        self::assertEquals('circle', $obj->getType());
    }
}
