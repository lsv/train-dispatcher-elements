<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements;

use Lsv\TrainDirectorElements\Svg\SvgElement;

interface Element
{
    public const ELEMENT_GROUP_SIGNAL = 'Signal';
    public const ELEMENT_GROUP_SWITCH = 'Switch';
    public const ELEMENT_GROUP_CROSSING = 'Crossing';
    public const ELEMENT_GROUP_DIAGONAL = 'Diagonal';
    public const ELEMENT_GROUP_STRAIGHT = 'Straight';
    public const ELEMENT_GROUP_STRAIGHT_DIAGONAL = 'Straight/Diagonal';

    public const GROUP_SIGNAL = 4;
    public const GROUP_TRACK = 0;
    public const GROUP_SWITCH = 2;

    /**
     * @return SvgElement[]
     */
    public function getSvgElements(): array;

    public function getType(): int;

    public function getElementGroup(): string;

    public function getGroup(): int;

    /**
     * @return array<int, string|null>
     */
    public function getConnections(): ?array;

    public function getName(): string;
}
