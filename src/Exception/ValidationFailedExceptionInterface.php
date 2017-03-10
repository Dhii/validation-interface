<?php

namespace Dhii\Validation\Exception;

use Dhii\Util\String\StringableInterface;
use Traversable;

/**
 * Something that can represent an exception which occurs if a validation
 * fails.
 *
 * @since 0.1
 */
interface ValidationFailedExceptionInterface extends ValidationExceptionInterface
{
    /**
     * Retrieves validation errors that are associated with this instance.
     *
     * @since 0.1
     *
     * @return string[]|StringableInterface[]|Traversable A list of errors.
     *                                                    Each error is something that can be treated as a string, and represents
     *                                                    a description of why a validation subject is invalid.
     */
    public function getValidationErrors();

    /**
     * Retrieves the invalid subject.
     *
     * @since 0.1
     *
     * @return mixed The value that failed validation.
     */
    public function getSubject();
}
