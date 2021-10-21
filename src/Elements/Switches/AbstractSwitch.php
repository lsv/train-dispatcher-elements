<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Switches;

use Lsv\TrainDirectorElements\Elements\AbstractElement;
use Lsv\TrainDirectorElements\Svg\Circle\SwitchCircle;
use Lsv\TrainDirectorElements\Svg\SvgElement;
use Lsv\TrainDirectorElements\Svg\SvgLine;

abstract class AbstractSwitch extends AbstractElement
{
    /**
     * @return SvgElement[]
     */
    abstract protected function elements(): array;

    public function getConnections(): array
    {
        $connections = [];
        foreach ($this->getSvgElements() as $element) {
            if ($element instanceof SvgLine && $element->getConnection()) {
                $connections[] = $element->getConnection();
            }
        }

        return $connections;
    }

    public function getSvgElements(): array
    {
        return [
            new SwitchCircle(),
            ...$this->elements(),
        ];
    }

    public function getElementGroup(): string
    {
        return self::ELEMENT_GROUP_SWITCH;
    }

    public function getGroup(): int
    {
        return self::GROUP_SWITCH;
    }
}
