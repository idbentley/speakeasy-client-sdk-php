<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubPublishingPRResponse - Open generation PRs pending publishing */
class GithubPublishingPRResponse
{
    /**
     *
     * @var ?string $pendingVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pending_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pendingVersion = null;

    /**
     *
     * @var ?string $pullRequest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pull_request')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pullRequest = null;

    /**
     * This can only be populated when the github app is installed for a repo
     *
     * @var ?PullRequestMetadata $pullRequestMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pull_request_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\PullRequestMetadata|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PullRequestMetadata $pullRequestMetadata = null;

    /**
     * @param  ?string  $pendingVersion
     * @param  ?string  $pullRequest
     * @param  ?PullRequestMetadata  $pullRequestMetadata
     */
    public function __construct(?string $pendingVersion = null, ?string $pullRequest = null, ?PullRequestMetadata $pullRequestMetadata = null)
    {
        $this->pendingVersion = $pendingVersion;
        $this->pullRequest = $pullRequest;
        $this->pullRequestMetadata = $pullRequestMetadata;
    }
}