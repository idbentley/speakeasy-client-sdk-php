<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class DownloadSchemaResponse
{
	
    public string $contentType;
    
    /**
     * Default error response
     * 
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error
     */
	
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    /**
     * OK
     * 
     * @var ?string $schema
     */
	
    public ?string $schema = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schema = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
