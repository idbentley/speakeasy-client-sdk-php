<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Actions
{
    /**
     *
     * @var bool $generationActionConfigured
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generation_action_configured')]
    public bool $generationActionConfigured;

    /**
     *
     * @var bool $publishActionConfigured
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publish_action_configured')]
    public bool $publishActionConfigured;

    /**
     * @param  bool  $generationActionConfigured
     * @param  bool  $publishActionConfigured
     * @phpstan-pure
     */
    public function __construct(bool $generationActionConfigured, bool $publishActionConfigured)
    {
        $this->generationActionConfigured = $generationActionConfigured;
        $this->publishActionConfigured = $publishActionConfigured;
    }
}