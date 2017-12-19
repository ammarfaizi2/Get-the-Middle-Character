<?php

use PHPUnit\Framework\TestCase;

class GetMiddleTests extends TestCase
{
    public function testBasics() {
      $this->assertEquals("es", getMiddle("test"));
      $this->assertEquals("t", getMiddle("testing"));
      $this->assertEquals("dd", getMiddle("middle"));
      $this->assertEquals("A", getMiddle("A"));
    }
}