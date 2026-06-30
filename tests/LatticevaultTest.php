<?php
/**
 * Tests for LatticeVault
 */

use PHPUnit\Framework\TestCase;
use Latticevault\Latticevault;

class LatticevaultTest extends TestCase {
    private Latticevault $instance;

    protected function setUp(): void {
        $this->instance = new Latticevault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Latticevault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
