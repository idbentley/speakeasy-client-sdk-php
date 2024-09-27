<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class DeleteWorkspaceTokenRequest
{
    /**
     * Unique identifier of the token.
     *
     * @var string $tokenID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;

    /**
     * Unique identifier of the workspace.
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public string $workspaceId;

    /**
     * @param  string  $tokenID
     * @param  string  $workspaceId
     */
    public function __construct(string $tokenID, string $workspaceId)
    {
        $this->tokenID = $tokenID;
        $this->workspaceId = $workspaceId;
    }
}