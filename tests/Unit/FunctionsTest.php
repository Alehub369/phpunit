<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_Email(): void
    {
        $result = validate_email('i@admin.com');
        $this->assertTrue($result);

        $result = validate_email('i@@admin.com');
        $this->assertFalse($result);
    }
}
