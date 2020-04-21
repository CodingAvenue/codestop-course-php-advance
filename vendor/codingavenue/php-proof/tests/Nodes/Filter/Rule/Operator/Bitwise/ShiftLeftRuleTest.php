<?php

use PHPUnit\Framework\TestCase;
use CodingAvenue\Proof\Nodes\Filter\Rule\Operator\Bitwise\ShiftLeft;

class ShiftLeftRuleTest extends TestCase
{
    public function testInstance()
    {
        $ShiftLeft = new ShiftLeft(array(), true);

        $this->assertInstanceOf(ShiftLeft::class, $ShiftLeft, "\$ShiftLeft is an instance of the ShiftLeft class");
    }

    public function testGetRule()
    {
        $ShiftLeft = new ShiftLeft(array(), true);

        $this->assertInternalType('callable', $ShiftLeft->getRule(), "GetRule returns a callback");
    }

    public function testCallback()
    {
        $left = new \PhpParser\Node\Scalar\LNumber(1, array('startLine' => 1, 'endLine' => 1, 'kind' => 10));
        $right = new \PhpParser\Node\Scalar\LNumber(2, array('startLine' => 1, 'endLine' => 1, 'kind' => 10));        
        $NotNode = new \PhpParser\Node\Expr\BinaryOp\ShiftLeft($left, $right, array('startLine' => 1, 'endLine' => 1));

        $ShiftLeft = new ShiftLeft(array(), true);
        $rule = $ShiftLeft->getRule();
        $this->assertEquals(true, $rule($NotNode), "The callback returns true");
    }

    public function testException()
    {
        $this->expectException(Exception::class);

        $ShiftLeft = new ShiftLeft(array('unknown' => 'name'), true);
    }
}
