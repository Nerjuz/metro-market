<?php

declare(strict_types=1);

/*
 * This file is part of contao.org.
 *
 * (c) Leo Feyer
 *
 * @license proprietary
 */

namespace Test\Unit;

use App\App;
use App\Counter\CounterInterface;
use App\Counter\CounterRegistry;
use App\Reader\ReaderInterface;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testShouldReturnOffersCount(): void
    {
        $app = $this->initApp();

        $result = $app->count(
            '',
            [1 => 'test'],
        );

        $this->assertSame(5, $result);
    }

    private function initApp(): App
    {
        $counter = $this->createMock(CounterInterface::class);
        $counter
            ->method('count')
            ->willReturn(5)
        ;

        $countersRegistry = $this->createMock(CounterRegistry::class);
        $countersRegistry
            ->expects($this->once())
            ->method('get')
            ->with('test')
            ->willReturn($counter)
        ;

        $reader = $this->createMock(ReaderInterface::class);

        return new App($countersRegistry, $reader);
    }
}
