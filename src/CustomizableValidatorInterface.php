<?php

namespace Dhii\Validation;

use Dhii\Data\Container\ContainerInterface;

/**
 * Something that can validate a value, taking into account possible options.
 *
 * @since [*next-version*]
 */
interface CustomizableValidatorInterface extends ValidatorInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @param array|ContainerInterface $options A map of options.
     */
    public function validate($value, $options = array());
}
