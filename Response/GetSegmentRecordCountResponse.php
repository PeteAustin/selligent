<?php

/**
 * This file is part of the Mediapart Selligent Client API
 *
 * (c) mediapart <https://github.com/mediapart/selligent>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mediapart\Selligent\Response;

use Mediapart\Selligent\Response;

/**
 * Gets the amount of recipients in a segment
 */
class GetSegmentRecordCountResponse extends Response
{
    /**
     * @var int The result of the function
     */
    protected $GetSegmentRecordCountResult;

    /**
     * @var int The number of records in the segment
     */
    protected $segmentCount;

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->GetSegmentRecordCountResult;
    }

    /**
     * @return int The number of records in the segment
     */
    public function getResult()
    {
        return $this->segmentCount;
    }
}
