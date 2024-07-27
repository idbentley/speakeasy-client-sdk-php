<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetAllApiVersionsRequest
{
    /**
     * The ID of the Api to retrieve.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * Metadata to filter Apis on
     *
     * @var ?array<string, array<string>> $metadata
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;

    /**
     * Configuration for filter operations
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\Op $op
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?Op $op = null;

    public function __construct()
    {
        $this->apiID = '';
        $this->metadata = null;
        $this->op = null;
    }
}