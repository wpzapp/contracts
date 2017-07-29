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
 * Interface for escapable structures.
 *
 * @since 1.0.0
 */
interface Escapable
{

    /**
     * Get an escaped version of the structure.
     *
     * @since 1.0.0
     *
     * @param int $flags Optional. Escaping flags. Default 0.
     *
     * @return mixed Escaped version of the structure.
     */
    public function escape(int $flags = 0);
}
