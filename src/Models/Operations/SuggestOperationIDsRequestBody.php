<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
/** SuggestOperationIDsRequestBody - The schema file to upload provided as a multipart/form-data file segment. */
class SuggestOperationIDsRequestBody
{
    #[SpeakeasyMetadata('multipartForm:name=opts,json=true')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestOperationIDsOpts $opts = null;

    #[SpeakeasyMetadata('multipartForm:file=true')]
    public Schema $schema;

    public function __construct()
    {
        $this->opts = null;
        $this->schema = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\Schema();
    }
}