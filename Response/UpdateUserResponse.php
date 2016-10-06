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
 * Update a contact profile in the specified list.
 */
class UpdateUserResponse extends Response
{
    /**
     * @var int
     */
    protected $UpdateUserResult;

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->UpdateUserResult;
    }
}