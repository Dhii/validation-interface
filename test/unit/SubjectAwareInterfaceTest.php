<?php

namespace Dhii\Validation\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Validation\SubjectAwareInterface}.
 *
 * @since 0.2
 */
class SubjectAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Validation\\SubjectAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return SubjectAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getSubject()
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
    }
}
