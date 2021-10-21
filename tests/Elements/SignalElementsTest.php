<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements;

use Generator;
use Lsv\TrainDirectorElements\Elements\SignalElements;
use Lsv\TrainDirectorElements\Svg\Circle\DoubleSignal;
use Lsv\TrainDirectorElements\Svg\Circle\SingleSignal;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Line;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\SvgElement;
use PHPUnit\Framework\TestCase;

class SignalElementsTest extends TestCase
{
    public function testDoubleSignal(): void
    {
        $elements = SignalElements::getDoubleSignal('top');
        self::assertCount(2, $elements);
        self::assertInstanceOf(SingleSignal::class, $elements[0]);
        self::assertInstanceOf(DoubleSignal::class, $elements[1]);

        /** @var DoubleSignal $doubleTop */
        $doubleTop = $elements[1];

        self::assertEquals(
            SvgElement::HALF + (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
            $doubleTop->cx
        );

        self::assertEquals(
            SvgElement::HALF,
            $doubleTop->cy
        );
    }

    public function signalPoleProvider(): Generator
    {
        yield [
            'getBottomPole',
            Right::class,
            [
                'y1' => SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE,
                'x1' => SvgElement::FULL_WIDTH,
                'y2' => SvgElement::SIGNAL_POLE_SIZE,
                'x2' => SvgElement::FULL_WIDTH,
            ],
        ];

        yield [
            'getLeftPole',
            Bottom::class,
            [
                'y1' => SvgElement::FULL_WIDTH,
                'x1' => SvgElement::SIGNAL_POLE_SIZE,
                'y2' => SvgElement::FULL_WIDTH,
                'x2' => SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE,
            ],
        ];

        yield 'rightPole' => [
            'getRightPole',
            Top::class,
            [
                'y1' => 0,
                'x1' => SvgElement::SIGNAL_POLE_SIZE,
                'y2' => 0,
                'x2' => SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE,
            ],
        ];

        yield [
            'getTopPole',
            Left::class,
            [
                'y1' => SvgElement::SIGNAL_POLE_SIZE,
                'x1' => 0,
                'y2' => SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE,
                'x2' => 0,
            ],
        ];
    }

    /**
     * @dataProvider signalPoleProvider
     */
    public function testPoles(string $method, string $standClass, array $sizes): void
    {
        $elements = SignalElements::{$method}();

        self::assertCount(2, $elements);

        $stand = $elements[0];
        self::assertInstanceOf($standClass, $stand);
        self::assertFalse($stand->addConnection);

        /** @var Line $pole */
        $pole = $elements[1];
        self::assertInstanceOf(Line::class, $pole);

        foreach ($sizes as $key => $value) {
            self::assertEquals(
                $value,
                $pole->{$key},
                $key
            );
        }
    }
}
