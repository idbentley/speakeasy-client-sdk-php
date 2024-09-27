<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Relationship
{
    /**
     *
     * @var string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    public string $userId;

    /**
     *
     * @var string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     * @param  string  $userId
     * @param  string  $workspaceId
     */
    public function __construct(string $userId, string $workspaceId)
    {
        $this->userId = $userId;
        $this->workspaceId = $workspaceId;
    }
}