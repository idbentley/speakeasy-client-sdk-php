<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** PullRequestMetadata - This can only be populated when the github app is installed for a repo */
class PullRequestMetadata
{
    /**
     *
     * @var ?string $baseBranch
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('base_branch')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $baseBranch = null;

    /**
     *
     * @var ?bool $canMerge
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('can_merge')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $canMerge = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * truncated to first 1000 characters
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $headBranch
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('head_branch')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $headBranch = null;

    /**
     * List of github labels
     *
     * @var ?array<string> $labels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('labels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $labels = null;

    /**
     * List of github handles
     *
     * @var ?array<string> $requestedReviewers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('requested_reviewers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $requestedReviewers = null;

    /**
     *
     * @var ?string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * @param  ?string  $baseBranch
     * @param  ?bool  $canMerge
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $headBranch
     * @param  ?array<string>  $labels
     * @param  ?array<string>  $requestedReviewers
     * @param  ?string  $status
     * @param  ?string  $title
     * @phpstan-pure
     */
    public function __construct(?string $baseBranch = null, ?bool $canMerge = null, ?\DateTime $createdAt = null, ?string $description = null, ?string $headBranch = null, ?array $labels = null, ?array $requestedReviewers = null, ?string $status = null, ?string $title = null)
    {
        $this->baseBranch = $baseBranch;
        $this->canMerge = $canMerge;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->headBranch = $headBranch;
        $this->labels = $labels;
        $this->requestedReviewers = $requestedReviewers;
        $this->status = $status;
        $this->title = $title;
    }
}