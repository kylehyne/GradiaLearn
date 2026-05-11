<?php
/**
 * Tests for GradiaLearn
 */

use PHPUnit\Framework\TestCase;
use Gradialearn\Gradialearn;

class GradialearnTest extends TestCase {
    private Gradialearn $instance;

    protected function setUp(): void {
        $this->instance = new Gradialearn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gradialearn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
