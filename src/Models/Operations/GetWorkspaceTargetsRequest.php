<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetWorkspaceTargetsRequest
{
    /**
     * Filter to only return targets with events created after this timestamp
     *
     * @var ?\DateTime $afterLastEventCreatedAt
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after_last_event_created_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $afterLastEventCreatedAt = null;

    /**
     * @param  ?\DateTime  $afterLastEventCreatedAt
     * @phpstan-pure
     */
    public function __construct(?\DateTime $afterLastEventCreatedAt = null)
    {
        $this->afterLastEventCreatedAt = $afterLastEventCreatedAt;
    }
}