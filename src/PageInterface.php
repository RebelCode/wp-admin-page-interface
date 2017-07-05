<?php

namespace RebelCode\WordPress\Admin\Page;

use Dhii\Data\IdAwareInterface;
use Dhii\Util\String\StringableInterface;

/**
 * Represents a WordPress admin page.
 *
 * @since [*next-version*]
 */
interface PageInterface extends IdAwareInterface
{
    /**
     * Retrieves the title of the page.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getTitle();

    /**
     * Retrieves the content to be rendered for this page.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getContent();
}
