<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Svg\Lines;

class Line extends AbstractLines
{
    public function __construct(private ?string $connection = null)
    {
        if (null === $this->connection) {
            $this->addConnection = false;
        }
    }

    public function getConnection(): ?string
    {
        return $this->connection;
    }
}
