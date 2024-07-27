<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestOperationIDsRequest
{
    /**
     * The schema file to upload provided as a multipart/form-data file segment.
     *
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public SuggestOperationIDsRequestBody $requestBody;

    /**
     * Max number of suggestions to request
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    public function __construct()
    {
        $this->requestBody = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRequestBody();
        $this->limit = null;
        $this->xSessionId = '';
    }
}