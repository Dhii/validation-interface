<?php

namespace Dhii\Validation\Exception;

use Dhii\Util\String\StringableInterface as Stringable;
use Exception;

/**
 * Something that can represent an exception which occurs if a validation
 * fails.
 */
interface ValidationFailedExceptionInterface extends ValidationExceptionInterface
{
    /**
     * Retrieves validation errors that are associated with this instance.
     *
     * @return string[]|Stringable[]|iterable A list of errors.
     *                                        Each error is something that can be treated as a string, and represents
     *                                        a description of why a validation subject is invalid.
     *
     * @throws Exception If problem retrieving.
     */
    public function getValidationErrors(): iterable;

    /**
     * Returns the subject, the validation for which failed.
     *
     * @return mixed The subject that was being validated.
     *
     * @throws Exception If problem retrieving.
     */
    public function getValidationSubject();
}
