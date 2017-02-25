<?php

namespace Dhii\Validation;

use Dhii\Util\String\StringableInterface;

/**
 * Something that can validate a value.
 *
 * @since [*next-version*]
 */
interface ValidatorInterface
{
    /**
     * Validates a value.
     *
     * @since [*next-version*]
     *
     * @param mixed $value The subject of validation.
     *
     * @throws ValidationExceptionInterface If problem validating.
     *
     * @return string[]|StringableInterface[]|\Traversable A list of errors.
     *                                                     If the list is empty, indicates that no validation errors occurred, and the value is valid.
     *                                                     Each error is a string, or an object that can be cast to string.
     */
    public function validate($value);
}
