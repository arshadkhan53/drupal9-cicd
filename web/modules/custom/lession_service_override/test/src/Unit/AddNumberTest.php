<?php

/**
 * Template File Doc Comment
 *
 * PHP version 7
 *
 * @category Custom
 * @package  Custom
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost:8080
 */

namespace Drupal\Tests\lession_service_override\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Template File Doc Comment
 *
 * PHP version 7
 *
 * @category Custom
 * @package  Custom
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost:8080
 */

class AddNumberTest extends UnitTestCase
{

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    protected function setUp(): void {
        parent::setUp();
    }

    /**
     * Tests a banned IP.
     *
     * @return mixed
     */
    public function testAddNumber()
    {
        $this->assertArrayHasKey('foo', ['foo' => 'baz']);
    }

}
