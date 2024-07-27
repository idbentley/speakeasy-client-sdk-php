<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class QueryEventLogRequest
{
    /**
     * The filter to apply to the query.
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters $filters
     */
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters $filters = null;

    public function __construct()
    {
        $this->filters = null;
    }
}