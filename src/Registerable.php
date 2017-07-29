<?php
/**
 * WP-ZAPP contracts for various libraries and modules.
 *
 * @package WPZAPP\Contracts
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Contracts;

use WPZAPP\Contracts\Exceptions\RegistrationException;

/**
 * Interface for registerable structures.
 *
 * @since 1.0.0
 */
interface Registerable
{

    /**
     * Register the structure.
     *
     * @since 1.0.0
     *
     * @throws RegistrationException
     */
    public function register();

    /**
     * Unregister the structure.
     *
     * @since 1.0.0
     *
     * @throws RegistrationException
     */
    public function unregister();

    /**
     * Check whether the structure is registered.
     *
     * @since 1.0.0
     *
     * @return bool Whether the structure is registered.
     */
    public function isRegistered(): bool;
}
