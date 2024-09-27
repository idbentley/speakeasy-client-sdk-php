<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class CreateWorkspaceTokenRequest
{
    /**
     *
     * @var Shared\WorkspaceToken $workspaceToken
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\WorkspaceToken $workspaceToken;

    /**
     * Unique identifier of the workspace.
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    /**
     * @param  Shared\WorkspaceToken  $workspaceToken
     * @param  string  $workspaceId
     */
    public function __construct(Shared\WorkspaceToken $workspaceToken, string $workspaceId)
    {
        $this->workspaceToken = $workspaceToken;
        $this->workspaceId = $workspaceId;
    }
}