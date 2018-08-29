<?php

namespace Dhii\Validation\UnitTest\Exception;

use Xpmock\TestCase;
use Dhii\Validation\Exception\ValidationFailedExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class ValidationFailedExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Validation\Exception\ValidationFailedExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getValidator()
                ->getValidationErrors()
                ->getSubject()
                // ThrowableInterface
                ->getMessage()
                ->getCode()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->getPrevious()
                ->__toString()
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
        $this->assertInstanceOf('Dhii\Validation\Exception\ValidationExceptionInterface', $subject, 'Subject does not implement a required interface');
        $this->assertInstanceOf('Dhii\Validation\ValidatorAwareInterface', $subject, 'Subject does not implement a required interface');
    }
}
