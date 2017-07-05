<?php

namespace RebelCode\WordPress\Admin\Page;

/**
 * Something that is aware of a page.
 *
 * @since [*next-version*]
 */
interface PageAwareInterface
{
    /**
     * Retrieves the page.
     *
     * @since [*next-version*]
     *
     * @return PageInterface
     */
    public function getPage();
}
