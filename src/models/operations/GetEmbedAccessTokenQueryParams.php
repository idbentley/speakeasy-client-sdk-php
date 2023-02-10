<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class GetEmbedAccessTokenQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=description')]
    public ?string $description;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=duration')]
    public ?int $duration;
    
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Filters $filters;
    
	public function __construct()
	{
		$this->description = null;
		$this->duration = null;
		$this->filters = null;
	}
}
