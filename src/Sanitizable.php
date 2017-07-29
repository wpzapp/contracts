<?php
/**
 * WP-ZAPP contracts for various modules and libraries.
 *
 * @package WPZAPP\Contracts
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Contracts;

/**
 * Interface for sanitizable structures.
 *
 * @since 1.0.0
 */
interface Sanitizable
{

    /**
     * Get a sanitized version of the structure.
     *
     * @since 1.0.0
     *
     * @return mixed Sanitized version of the structure.
     */
    public function sanitize();
}
