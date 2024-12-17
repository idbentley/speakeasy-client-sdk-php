<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetWorkspaceEventsByTargetRequest
{
    /**
     * Filter to only return events corresponding to a particular gen_lock_id (gen_lock_id uniquely identifies a target)
     *
     * @var string $targetId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=target_id')]
    public string $targetId;

    /**
     * Filter to only return events created after this timestamp
     *
     * @var ?\DateTime $afterCreatedAt
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after_created_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $afterCreatedAt = null;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public ?string $workspaceId = null;

    /**
     * @param  string  $targetId
     * @param  ?\DateTime  $afterCreatedAt
     * @param  ?string  $workspaceId
     */
    public function __construct(string $targetId, ?\DateTime $afterCreatedAt = null, ?string $workspaceId = null)
    {
        $this->targetId = $targetId;
        $this->afterCreatedAt = $afterCreatedAt;
        $this->workspaceId = $workspaceId;
    }
}