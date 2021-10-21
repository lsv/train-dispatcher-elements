<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Circle;

use Lsv\TrainDirectorElements\Svg\SvgElement;
use RuntimeException;

class DoubleSignal extends AbstractCircle
{
    public float $radius = SvgElement::SIGNAL_CIRCLE_RADIUS;

    public function __construct(private string $position = 'top')
    {
        $this->cx = $this->getPosition()[0];
        $this->cy = $this->getPosition()[1];
    }

    /**
     * @return array<int, float>
     */
    private function getPosition(): array
    {
        return match ($this->position) {
            'bottom' => [
                SvgElement::HALF - (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
                SvgElement::HALF,
            ],
            'left' => [
                SvgElement::HALF,
                SvgElement::HALF - (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
            ],
            'right' => [
                SvgElement::HALF,
                SvgElement::HALF + (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
            ],
            'top' => [
                SvgElement::HALF + (SvgElement::SIGNAL_CIRCLE_RADIUS * 2),
                SvgElement::HALF,
            ],
            default => throw new RuntimeException("Position '{$this->position}' is not accepted"),
        };
    }
}
