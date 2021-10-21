<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements;

use Lsv\TrainDirectorElements\Svg\Circle\DoubleSignal;
use Lsv\TrainDirectorElements\Svg\Circle\SingleSignal;
use Lsv\TrainDirectorElements\Svg\Lines\Bottom;
use Lsv\TrainDirectorElements\Svg\Lines\Left;
use Lsv\TrainDirectorElements\Svg\Lines\Line;
use Lsv\TrainDirectorElements\Svg\Lines\Right;
use Lsv\TrainDirectorElements\Svg\Lines\Top;
use Lsv\TrainDirectorElements\Svg\SvgElement;

class SignalElements
{
    /**
     * @return SvgElement[]
     */
    public static function getDoubleSignal(string $position): array
    {
        return [
            new SingleSignal(),
            new DoubleSignal($position),
        ];
    }

    /**
     * @return SvgElement[]
     */
    public static function getBottomPole(): array
    {
        $stand = new Right();
        $stand->addConnection = false;
        $stand->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;

        $pole = new Line();
        $pole->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;
        $pole->y1 = SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE;
        $pole->x1 = SvgElement::FULL_WIDTH;
        $pole->y2 = SvgElement::SIGNAL_POLE_SIZE;
        $pole->x2 = SvgElement::FULL_WIDTH;

        return [
            $stand,
            $pole,
        ];
    }

    /**
     * @return SvgElement[]
     */
    public static function getLeftPole(): array
    {
        $stand = new Bottom();
        $stand->addConnection = false;
        $stand->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;

        $pole = new Line();
        $pole->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;
        $pole->y1 = SvgElement::FULL_WIDTH;
        $pole->x1 = SvgElement::SIGNAL_POLE_SIZE;
        $pole->y2 = SvgElement::FULL_WIDTH;
        $pole->x2 = SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE;

        return [
            $stand,
            $pole,
        ];
    }

    /**
     * @return SvgElement[]
     */
    public static function getRightPole(): array
    {
        $stand = new Top();
        $stand->addConnection = false;
        $stand->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;

        $pole = new Line();
        $pole->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;
        $pole->y1 = 0;
        $pole->x1 = SvgElement::SIGNAL_POLE_SIZE;
        $pole->y2 = 0;
        $pole->x2 = SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE;

        return [
            $stand,
            $pole,
        ];
    }

    /**
     * @return SvgElement[]
     */
    public static function getTopPole(): array
    {
        $stand = new Left();
        $stand->addConnection = false;
        $stand->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;

        $pole = new Line();
        $pole->strokeWidth = SvgElement::SIGNAL_POLE_WIDTH;
        $pole->y1 = SvgElement::SIGNAL_POLE_SIZE;
        $pole->x1 = 0;
        $pole->y2 = SvgElement::FULL_WIDTH - SvgElement::SIGNAL_POLE_SIZE;
        $pole->x2 = 0;

        return [
            $stand,
            $pole,
        ];
    }
}
