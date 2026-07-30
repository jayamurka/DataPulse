<?php
/**
 * Tests for DataPulse
 */

use PHPUnit\Framework\TestCase;
use Datapulse\Datapulse;

class DatapulseTest extends TestCase {
    private Datapulse $instance;

    protected function setUp(): void {
        $this->instance = new Datapulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datapulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
