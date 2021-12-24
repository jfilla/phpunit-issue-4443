<?php

declare(strict_types=1);

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testExample(): void
    {
        $this->assertEquals(1, 1);
    }
}
