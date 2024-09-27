<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class UpdateWorkspaceDetailsRequest
{
    /**
     * The workspace details to update.
     *
     * @var Shared\Workspace $workspace
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\Workspace $workspace;

    /**
     * Unique identifier of the workspace.
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    /**
     * @param  Shared\Workspace  $workspace
     * @param  string  $workspaceId
     */
    public function __construct(Shared\Workspace $workspace, string $workspaceId)
    {
        $this->workspace = $workspace;
        $this->workspaceId = $workspaceId;
    }
}