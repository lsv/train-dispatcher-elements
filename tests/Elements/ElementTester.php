<?php

declare(strict_types=1);

namespace Lsv\TrainDirectorElements\Tests\Elements;

use Lsv\TrainDirectorElements\Elements\Element;
use PHPUnit\Framework\TestCase;

abstract class ElementTester extends TestCase
{
    public function getElement(): Element
    {
        $className = static::class;
        $className = str_replace('Tests\\', '', $className);
        $className = substr($className, 0, -4);

        return new $className();
    }

    abstract public function getNumberOfSvgElements(): int;

    abstract public function getNumberOfConnections(): int;

    abstract public function getType(): int;

    abstract public function getGroup(): int;

    abstract public function getElementGroup(): string;

    public function testName(): void
    {
        self::assertSame(
            $this->getElement()::class,
            $this->getElement()->getName(),
            'name'
        );
    }

    public function testGroup(): void
    {
        self::assertSame(
            $this->getGroup(),
            $this->getElement()->getGroup(),
            'group'
        );
    }

    public function testElementGroup(): void
    {
        self::assertSame(
            $this->getElementGroup(),
            $this->getElement()->getElementGroup(),
            'element group'
        );
    }

    public function testConnections(): void
    {
        if (null === $this->getElement()->getConnections()) {
            self::fail('Connections can not be NULL');
        }

        self::assertCount(
            $this->getNumberOfConnections(),
            $this->getElement()->getConnections(),
            'connections'
        );
    }

    public function testSvgElements(): void
    {
        self::assertCount(
            $this->getNumberOfSvgElements(),
            $this->getElement()->getSvgElements(),
            'elements'
        );
    }

    public function testType(): void
    {
        self::assertSame(
            $this->getType(),
            $this->getElement()->getType(),
            'type'
        );
    }
}
