<?php
/**
 * Tests for JointKnowledge
 */

use PHPUnit\Framework\TestCase;
use Jointknowledge\Jointknowledge;

class JointknowledgeTest extends TestCase {
    private Jointknowledge $instance;

    protected function setUp(): void {
        $this->instance = new Jointknowledge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jointknowledge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
