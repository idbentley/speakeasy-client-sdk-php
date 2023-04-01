<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class RevokeEmbedAccessTokenRequest
{
    /**
     * The ID of the EmbedToken to revoke.
     * 
     * @var string $tokenID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;
    
	public function __construct()
	{
		$this->tokenID = "";
	}
}
