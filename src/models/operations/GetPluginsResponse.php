<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetPluginsResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error = null;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\Plugin>
     */
    public ?array $plugins = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->plugins = null;
		$this->statusCode = 0;
	}
}
