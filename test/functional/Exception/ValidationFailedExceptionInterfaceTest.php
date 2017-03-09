<?php

namespace Dhii\Validation\FuncTest\Exception;

use Xpmock\TestCase;
use Dhii\Validation\Exception\ValidationFailedExceptionInterface;

/**
 * Tests {@see Dhii\Validation\Exception\ValidationFailedExceptionInterface}.
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
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Validation\\Exception\\ValidationFailedExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return ValidationFailedExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getValidationErrors()
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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'Could not create a valid instance');
    }
}
