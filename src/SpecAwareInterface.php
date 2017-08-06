<?php

namespace Dhii\Validation;

/**
 * Something that can have a specification retrieved.
 *
 * @since [*next-version*]
 */
interface SpecAwareInterface
{
    /**
     * Retrieves the specification associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return array|Traversable The specification.
     *                           A specification is a set of requirements.
     */
    public function getSpec();
}
