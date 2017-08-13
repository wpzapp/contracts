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
 * Interface for formatable structures.
 *
 * @since 1.0.0
 */
interface Formatable
{

    /**
     * Get a formatted version of the structure.
     *
     * @since 1.0.0
     *
     * @return mixed Formatted version of the structure.
     */
    public function format();
}
