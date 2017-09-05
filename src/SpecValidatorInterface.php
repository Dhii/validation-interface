<?php

namespace Dhii\Validation;

use Traversable;

/**
 * Something that can validate a value according to a specification.
 *
 * @since 0.2
 */
interface SpecValidatorInterface extends ValidatorInterface
{
    /**
     * {@inheritdoc}
     *
     * @since 0.2
     *
     * @param array|Traversable|null $spec A list of criteria, a.k.a. the spec, if any.
     */
    public function validate($value, $spec = null);
}
