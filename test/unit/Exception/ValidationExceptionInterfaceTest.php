<?php

namespace Dhii\Validation\UnitTest\Exception;

use Xpmock\TestCase;
use Dhii\Validation\Exception\ValidationExceptionInterface;

/**
 * Tests {@see \Dhii\Validation\Exception\ValidationExceptionInterface}.
 *
 * @since 0.1
 */
class ValidationExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Validation\Exception\ValidationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return ValidationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getValidator()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
    }
}
