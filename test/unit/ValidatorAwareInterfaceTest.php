<?php

namespace Dhii\Validation\UnitTest;

use Xpmock\TestCase;
use Dhii\Validation\ValidatorAwareInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class ValidatorAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Validation\ValidatorAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return TestSubject
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
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the test subject could not be created');
    }
}
