<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class ApplyOperationIDsRequest
{
    /**
     * Apply options
     *
     * @var ?ApplyOperationIDsRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?ApplyOperationIDsRequestBody $requestBody = null;

    /**
     *
     * @var string $xSessionId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    /**
     * @param  ?string  $xSessionId
     * @param  ?ApplyOperationIDsRequestBody  $requestBody
     */
    public function __construct(?string $xSessionId = null, ?ApplyOperationIDsRequestBody $requestBody = null)
    {
        $this->xSessionId = $xSessionId;
        $this->requestBody = $requestBody;
    }
}