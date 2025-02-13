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
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    public string $generateGenLockId;

    /**
     * A map of secrets to store in the GitHub target
     *
     * @var ?array<string, string> $secrets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secrets')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $secrets = null;

    /**
     * @param  string  $generateGenLockId
     * @param  ?array<string, string>  $secrets
     * @phpstan-pure
     */
    public function __construct(string $generateGenLockId, ?array $secrets = null)
    {
        $this->generateGenLockId = $generateGenLockId;
        $this->secrets = $secrets;
    }
}