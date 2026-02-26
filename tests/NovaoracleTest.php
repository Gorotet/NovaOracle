<?php
/**
 * Tests for NovaOracle
 */

use PHPUnit\Framework\TestCase;
use Novaoracle\Novaoracle;

class NovaoracleTest extends TestCase {
    private Novaoracle $instance;

    protected function setUp(): void {
        $this->instance = new Novaoracle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Novaoracle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
