<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class DownloadSchemaRevisionResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public ?string $schema;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schema = null;
		$this->statusCode = 0;
	}
}
