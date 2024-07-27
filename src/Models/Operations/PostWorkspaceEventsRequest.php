<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class PostWorkspaceEventsRequest
{
    /**
     * $requestBody
     *
     * @var array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\CliEvent> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspaceID')]
    public ?string $workspaceID = null;

    public function __construct()
    {
        $this->requestBody = [];
        $this->workspaceID = null;
    }
}