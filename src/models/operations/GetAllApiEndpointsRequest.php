<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetAllApiEndpointsRequest
{
    public GetAllApiEndpointsPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiEndpointsPathParams();
	}
}
