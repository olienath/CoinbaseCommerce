<?php
/**
 * Tests for CoinbaseCommerce
 */

use PHPUnit\Framework\TestCase;
use Coinbasecommerce\Coinbasecommerce;

class CoinbasecommerceTest extends TestCase {
    private Coinbasecommerce $instance;

    protected function setUp(): void {
        $this->instance = new Coinbasecommerce(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinbasecommerce::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
