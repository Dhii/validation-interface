<?php

namespace Dhii\Validation\ValidatorInterface;

use Dhii\Util\String\StringableInterface;

/**
 * Something that can represent an exception which occurs if a validation
 * fails.
 *
 * @since [*next-version*]
 */
interface ValidationFailedExceptionInterface extends ValidationExceptionInterface
{
    /**
     * @since [*next-version*]
     *
     * @return string[]|StringableInterface[]|\Traversable A list of errors.
     *                                                     Each error is something that can be treated as a string, and represents
     *                                                     a description of why a validation subject is invalid.
     */
    public function getValidationErrors();
}
