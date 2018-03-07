<?php

namespace Dhii\Validation;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create validator instances.
 *
 * @since [*next-version*]
 */
interface ValidatorFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ValidatorInterface The created validator instance.
     */
    public function make($config = null);
}
