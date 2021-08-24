<?php

namespace Test\Unit;

use App\App;
use App\Counter\CounterInterface;
use App\Counter\CounterRegistry;
use App\Reader\ReaderInterface;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /** @test */
    public function shouldReturnOffersCount(): void
    {
        $app = $this->initApp();

        $result = $app->run(
            $this->createMock(ReaderInterface::class),
            '',
            [1 => 'test']
        );

        self::assertSame(5, $result);
    }

    private function initApp(): App
    {
        $counter = $this->createMock(CounterInterface::class);
        $counter->method('count')->willReturn(5);

        $countersRegistry = $this->createMock(CounterRegistry::class);
        $countersRegistry
            ->expects(self::once())
            ->method('get')
            ->with('test')
            ->willReturn($counter);

        return new App($countersRegistry);
    }
}