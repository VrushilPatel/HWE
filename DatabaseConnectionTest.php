<?php
use PHPUnit\Framework\TestCase;

final class AlwaysTrueTest extends TestCase
{
    public function testAlwaysTrue(): void
    {
        $this->assertTrue(true);
    }
}
?>

