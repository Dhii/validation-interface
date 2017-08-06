<?php

namespace Dhii\Validation\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Validation\CustomizableValidatorInterface}.
 *
 * @since [*next-version*]
 */
class CustomizableValidatorInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Validation\\CustomizableValidatorInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return CustomizableValidatorInterface
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
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'Could not create a valid instance');
        $this->assertInstanceOf('Dhii\\Validation\\ValidatorInterface', $subject, 'Could not create a valid instance');
    }
}
