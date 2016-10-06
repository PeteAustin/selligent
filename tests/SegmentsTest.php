<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * (c) mediapart <https://github.com/mediapart/selligent>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent;

use PHPUnit\Framework\TestCase;

/**
 *
 */
class SegmentsTest extends TestCase
{
    /**
     *
     */
    public function testEmptyCollection()
    {
        $segments = new ArrayOfSegmentInfo();

        $this->assertCount(0, $segments);
    }

    /**
     *
     */
    public function testSegmentInfo()
    {
        $segment = new SegmentInfo();

        $this->assertNull($segment->getId());
        $this->assertNull($segment->getName());
        $this->assertNull($segment->getType());
        $this->assertNull($segment->getDescription());
    }
}
