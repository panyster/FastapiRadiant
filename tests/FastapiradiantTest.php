<?php
/**
 * Tests for FastapiRadiant
 */

use PHPUnit\Framework\TestCase;
use Fastapiradiant\Fastapiradiant;

class FastapiradiantTest extends TestCase {
    private Fastapiradiant $instance;

    protected function setUp(): void {
        $this->instance = new Fastapiradiant(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fastapiradiant::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
