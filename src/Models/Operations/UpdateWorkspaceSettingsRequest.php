<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class UpdateWorkspaceSettingsRequest
{
    /**
     * The workspace settings to update.
     *
     * @var Shared\WorkspaceSettings $workspaceSettings
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\WorkspaceSettings $workspaceSettings;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public ?string $workspaceId = null;

    /**
     * @param  Shared\WorkspaceSettings  $workspaceSettings
     * @param  ?string  $workspaceId
     * @phpstan-pure
     */
    public function __construct(Shared\WorkspaceSettings $workspaceSettings, ?string $workspaceId = null)
    {
        $this->workspaceSettings = $workspaceSettings;
        $this->workspaceId = $workspaceId;
    }
}