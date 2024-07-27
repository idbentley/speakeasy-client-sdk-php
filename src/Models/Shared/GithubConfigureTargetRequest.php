<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubConfigureTargetRequest - A request to configure a GitHub target */
class GithubConfigureTargetRequest
{
    /**
     * The GitHub organization name
     *
     * @var string $org
     */
    #[\JMS\Serializer\Annotation\SerializedName('org')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $org;

    /**
     * The GitHub repository name
     *
     * @var string $repoName
     */
    #[\JMS\Serializer\Annotation\SerializedName('repo_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $repoName;

    public function __construct()
    {
        $this->org = '';
        $this->repoName = '';
    }
}