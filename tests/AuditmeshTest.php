<?php
/**
 * Tests for AuditMesh
 */

use PHPUnit\Framework\TestCase;
use Auditmesh\Auditmesh;

class AuditmeshTest extends TestCase {
    private Auditmesh $instance;

    protected function setUp(): void {
        $this->instance = new Auditmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Auditmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
