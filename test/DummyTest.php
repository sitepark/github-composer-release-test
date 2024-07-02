<?php

declare(strict_types=1);

namespace SP\ReleaseTest\Test;

use SP\ReleaseTest\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function testConstructor(): void
    {
        $dummy = new Dummy('test');
        $this->assertEquals(
            'test',
            $dummy->getName(),
            'unexpected name',
        );
    }
}
