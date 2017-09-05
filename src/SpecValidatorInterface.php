<?php

namespace Dhii\Validation;

use Traversable;

/**
 * Something that can validate a value according to a specification.
 *
 * @since [*next-version*]
 */
interface SpecValidatorInterface extends ValidatorInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @param array|Traversable|null $spec A list of criteria, a.k.a. the spec, if any.
     */
    public function validate($value, $spec = null);
}
