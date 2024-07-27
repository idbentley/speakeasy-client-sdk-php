<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubStorePublishingSecretsRequest - A request to store publishing secrets for a github target */
class GithubStorePublishingSecretsRequest
{
    /**
     * The generation lock ID
     *
     * @var string $generateGenLockId
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $generateGenLockId;

    /**
     * A map of secrets to store in the GitHub target
     *
     * @var ?array<string, string> $secrets
     */
    #[\JMS\Serializer\Annotation\SerializedName('secrets')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $secrets = null;

    public function __construct()
    {
        $this->generateGenLockId = '';
        $this->secrets = null;
    }
}