<?php

namespace Dhii\Validation;

/**
 * Something that can have a subject retrieved.
 *
 * @since [*next-version*]
 */
interface SubjectAwareInterface
{
    /**
     * Retrieves the subject.
     *
     * @since [*next-version*]
     *
     * @return mixed The subject.
     */
    public function getSubject();
}
