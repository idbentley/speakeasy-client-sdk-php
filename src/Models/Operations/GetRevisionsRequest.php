<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetRevisionsRequest
{
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_id')]
    public string $namespaceId;
    
    /**
     * Token to retrieve the next page of results
     * 
     * @var ?string $nextPageToken
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=next_page_token')]
    public ?string $nextPageToken = null;
    
	public function __construct()
	{
		$this->namespaceId = "";
		$this->nextPageToken = null;
	}
}
