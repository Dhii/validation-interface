<?php

namespace Dhii\Validation\UnitTest;

use Xpmock\TestCase;
use Dhii\Validation\SpecValidatorInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class SpecValidatorInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Validation\SpecValidatorInterface';

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
                ->validate()
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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'Could not create a valid instance');
        $this->assertInstanceOf('Dhii\Validation\ValidatorInterface', $subject, 'Could not create a valid instance');
    }
}
