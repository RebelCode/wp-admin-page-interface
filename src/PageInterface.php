<?php

namespace RebelCode\WordPress\Admin\Page;

use Dhii\Data\IdAwareInterface;

/**
 * Represents a WordPress admin page.
 *
 * @since [*next-version*]
 */
interface PageInterface extends IdAwareInterface
{
    /**
     * Retrieves the unique ID of the page.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getId();

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
     * The content is not limited to a string or string-like object. This method is free to return anything that it
     * deems appropriate for rendering, such as a callback, DOM or resource URI.
     *
     * @since [*next-version*]
     *
     * @return mixed
     */
    public function getContent();
}
