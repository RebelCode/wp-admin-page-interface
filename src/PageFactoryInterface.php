<?php

namespace RebelCode\WordPress\Admin\Page;

use Dhii\Factory\FactoryInterface;

/**
 * A factory of pages.
 *
 * @since [*next-version*]
 */
interface PageFactoryInterface extends FactoryInterface
{
    /** @since [*next-version*] */
    const K_ID = 'id';

    /** @since [*next-version*] */
    const K_TITLE = 'title';

    /** @since [*next-version*] */
    const K_CONTENT = 'content';
}
