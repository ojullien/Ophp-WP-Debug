<?php
declare(strict_types=1);

namespace OphpTest\WP\Debug\Exception;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{

    /**
     * @covers \Ophp\WP\Debug\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException(): void
    {
        throw new \Ophp\WP\Debug\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\BadMethodCallException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\BadMethodCallException
     */
    public function testBadMethodCallException(): void
    {
        throw new \Ophp\WP\Debug\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\DomainException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\DomainException
     */
    public function testDomainException(): void
    {
        throw new \Ophp\WP\Debug\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException(): void
    {
        throw new \Ophp\WP\Debug\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\LengthException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\LengthException
     */
    public function testLengthException(): void
    {
        throw new \Ophp\WP\Debug\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException(): void
    {
        throw new \Ophp\WP\Debug\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\OutOfRangeException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\OutOfRangeException
     */
    public function testOutOfRangeException(): void
    {
        throw new \Ophp\WP\Debug\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\OverflowException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\OverflowException
     */
    public function testOverflowException(): void
    {
        throw new \Ophp\WP\Debug\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\RuntimeException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\RuntimeException
     */
    public function testRuntimeException(): void
    {
        throw new \Ophp\WP\Debug\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\UnderflowException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\UnderflowException
     */
    public function testUnderflowException(): void
    {
        throw new \Ophp\WP\Debug\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\WP\Debug\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Ophp\WP\Debug\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException(): void
    {
        throw new \Ophp\WP\Debug\Exception\UnexpectedValueException(__METHOD__);
    }
}
