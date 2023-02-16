<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetAllForVersionApiEndpointsRequest
{
    public GetAllForVersionApiEndpointsPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllForVersionApiEndpointsPathParams();
	}
}
