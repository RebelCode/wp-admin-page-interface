<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use RebelCode\WordPress\Admin\Page\PageAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\WordPress\Admin\Page\PageAwareInterface}.
 *
 * @since [*next-version*]
 */
class PageAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Page\\PageAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return PageAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getPage()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
    }
}
