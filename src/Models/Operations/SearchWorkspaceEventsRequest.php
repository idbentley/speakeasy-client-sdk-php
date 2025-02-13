<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SearchWorkspaceEventsRequest
{
    /**
     * Shared execution ID for cli events across a single action.
     *
     * @var ?string $executionId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=execution_id')]
    public ?string $executionId = null;

    /**
     * A specific gen lock ID for the events.
     *
     * @var ?string $generateGenLockId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=generate_gen_lock_id')]
    public ?string $generateGenLockId = null;

    /**
     * Specified interaction type for events.
     *
     * @var ?Shared\InteractionType $interactionType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interaction_type')]
    public ?Shared\InteractionType $interactionType = null;

    /**
     * Number of results to return.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * Unique identifier of the lint report digest.
     *
     * @var ?string $lintReportDigest
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=lint_report_digest')]
    public ?string $lintReportDigest = null;

    /**
     * Unique identifier of the openapi diff report digest.
     *
     * @var ?string $openapiDiffReportDigest
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=openapi_diff_report_digest')]
    public ?string $openapiDiffReportDigest = null;

    /**
     * Unique identifier of the source revision digest.
     *
     * @var ?string $sourceRevisionDigest
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=source_revision_digest')]
    public ?string $sourceRevisionDigest = null;

    /**
     * Whether the event was successful or not.
     *
     * @var ?bool $success
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=success')]
    public ?bool $success = null;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public ?string $workspaceId = null;

    /**
     * @param  ?string  $executionId
     * @param  ?string  $generateGenLockId
     * @param  ?Shared\InteractionType  $interactionType
     * @param  ?int  $limit
     * @param  ?string  $lintReportDigest
     * @param  ?string  $openapiDiffReportDigest
     * @param  ?string  $sourceRevisionDigest
     * @param  ?bool  $success
     * @param  ?string  $workspaceId
     * @phpstan-pure
     */
    public function __construct(?string $executionId = null, ?string $generateGenLockId = null, ?Shared\InteractionType $interactionType = null, ?int $limit = null, ?string $lintReportDigest = null, ?string $openapiDiffReportDigest = null, ?string $sourceRevisionDigest = null, ?bool $success = null, ?string $workspaceId = null)
    {
        $this->executionId = $executionId;
        $this->generateGenLockId = $generateGenLockId;
        $this->interactionType = $interactionType;
        $this->limit = $limit;
        $this->lintReportDigest = $lintReportDigest;
        $this->openapiDiffReportDigest = $openapiDiffReportDigest;
        $this->sourceRevisionDigest = $sourceRevisionDigest;
        $this->success = $success;
        $this->workspaceId = $workspaceId;
    }
}