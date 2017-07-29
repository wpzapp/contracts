<?php
/**
 * WP-ZAPP contracts for various libraries and modules.
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
     * @param int $flags Optional. Formatting flags. Default 0.
     *
     * @return mixed Formatted version of the structure.
     */
    public function format(int $flags = 0);
}
