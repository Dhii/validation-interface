<?php

namespace Dhii\Validation;

use Dhii\Data\Container\ContainerInterface;

/**
 * Something that can have a set of options retrieved.
 *
 * @since [*next-version*]
 */
interface OptionsAwareInterface
{
    /**
     * Retrieves the options associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return array|ContainerInterface The map of option names to their values.
     */
    public function getOptions();
}
