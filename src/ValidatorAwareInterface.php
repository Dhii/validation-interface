<?php

namespace Dhii\Validation;

/**
 * Something that can have a validator retrieved from it.
 *
 * @since [*next-version*]
 */
interface ValidatorAwareInterface
{
    /**
     * Retrieves the validator.
     *
     * @since [*next-version*]
     *
     * @return ValidatorInterface|null The validator, if any.
     */
    public function getValidator();
}
