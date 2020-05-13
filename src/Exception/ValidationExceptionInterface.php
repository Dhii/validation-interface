<?php
declare(strict_types=1);

namespace Dhii\Validation\Exception;

use Dhii\Validation\ValidatorInterface;
use Throwable;

/**
 * Something that can represent an exception which can occur in or be related to
 * a validation process or component.
 */
interface ValidationExceptionInterface extends Throwable
{
    /**
     * Retrieves the validator related to the problem.
     *
     * @return ValidatorInterface The validator.
     */
    public function getValidator(): ValidatorInterface;
}
