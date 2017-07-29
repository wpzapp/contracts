<?php
/**
 * WP-ZAPP contracts for various libraries and modules.
 *
 * @package WPZAPP\Contracts
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Contracts;

use WPZAPP\Contracts\Exceptions\ValidationException;

/**
 * Interface for validatable structures.
 *
 * @since 1.0.0
 */
interface Validatable
{

    /**
     * Validate the structure.
     *
     * @since 1.0.0
     *
     * @throws ValidationException
     */
    public function validate();

    /**
     * Check whether the structure is valid.
     *
     * @since 1.0.0
     *
     * @return bool Whether the structure is valid.
     */
    public function isValid(): bool;
}
