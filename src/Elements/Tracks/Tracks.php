<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Elements\Tracks;

use Lsv\TrainDirectorElements\Elements\AbstractElement;
use Lsv\TrainDirectorElements\Svg\SvgLine;

abstract class Tracks extends AbstractElement
{
    public function getGroup(): int
    {
        return self::GROUP_TRACK;
    }

    public function getConnections(): array
    {
        $output = [];
        foreach ($this->getSvgElements() as $element) {
            if ($element instanceof SvgLine && $element->getConnection()) {
                $output[] = $element->getConnection();
            }
        }

        return $output;
    }
}
