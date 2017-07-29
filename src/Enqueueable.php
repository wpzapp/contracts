<?php
/**
 * WP-ZAPP contracts for various libraries and modules.
 *
 * @package WPZAPP\Contracts
 * @license GPL-3.0
 * @link    https://wpzapp.org
 */

namespace WPZAPP\Contracts;

use WPZAPP\Contracts\Exceptions\EnqueuingException;

/**
 * Interface for enqueueable structures.
 *
 * @since 1.0.0
 */
interface Enqueueable
{

    /**
     * Enqueue the structure.
     *
     * @since 1.0.0
     *
     * @throws EnqueuingException
     */
    public function enqueue();

    /**
     * Dequeue the structure.
     *
     * @since 1.0.0
     *
     * @throws EnqueuingException
     */
    public function dequeue();

    /**
     * Check whether the structure is enqueued.
     *
     * @since 1.0.0
     *
     * @return bool Whether the structure is enqueued.
     */
    public function isEnqueued(): bool;
}
