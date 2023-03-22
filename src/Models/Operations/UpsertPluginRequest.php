<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class UpsertPluginRequest
{
    /**
     * A JSON representation of the Api to upsert
     * 
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin $request
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin $request;
    
	public function __construct()
	{
		$this->request = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin();
	}
}
