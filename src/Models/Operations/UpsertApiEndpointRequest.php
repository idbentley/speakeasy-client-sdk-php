<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class UpsertApiEndpointRequest
{
    /**
     * A JSON representation of the ApiEndpoint to upsert.
     * 
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput $apiEndpointInput
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput $apiEndpointInput;
    
    /**
     * The ID of the ApiEndpoint to upsert.
     * 
     * @var string $apiEndpointID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiEndpointID')]
    public string $apiEndpointID;
    
    /**
     * The ID of the Api the ApiEndpoint belongs to.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The version ID of the Api the ApiEndpoint belongs to.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiEndpointInput = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput();
		$this->apiEndpointID = "";
		$this->apiID = "";
		$this->versionID = "";
	}
}
