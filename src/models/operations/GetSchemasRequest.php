<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetSchemasRequest
{
    public GetSchemasPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetSchemasPathParams();
	}
}
