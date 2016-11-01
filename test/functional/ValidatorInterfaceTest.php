<?php

namespace Dhii\Validation;

/**
 * Tests {@see Dhii\Validation\ValidatorInterface}.
 *
 * @since [*next-version*]
 */
class ValidatorInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ValidatorInterface
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\Validation\ValidatorInterface')
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(Dhii\Validation\ValidatorInterface, $subject, 'Could not create a valid instance');
    }
}
