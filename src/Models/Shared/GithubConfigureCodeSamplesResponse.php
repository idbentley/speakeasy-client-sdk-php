<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubConfigureCodeSamplesResponse - A response to configure GitHub code samples */
class GithubConfigureCodeSamplesResponse
{
    /**
     * The URL of the code sample overlay registry
     *
     * @var string $codeSampleOverlayRegistryURL
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('codeSampleOverlayRegistryURL')]
    public string $codeSampleOverlayRegistryURL;

    /**
     * A document referenced by a workflow
     *
     * @var WorkflowDocument $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\WorkflowDocument')]
    public WorkflowDocument $source;

    /**
     * The ID of the GitHub action that was dispatched
     *
     * @var ?string $ghActionID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ghActionID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionID = null;

    /**
     * @param  string  $codeSampleOverlayRegistryURL
     * @param  WorkflowDocument  $source
     * @param  ?string  $ghActionID
     * @phpstan-pure
     */
    public function __construct(string $codeSampleOverlayRegistryURL, WorkflowDocument $source, ?string $ghActionID = null)
    {
        $this->codeSampleOverlayRegistryURL = $codeSampleOverlayRegistryURL;
        $this->source = $source;
        $this->ghActionID = $ghActionID;
    }
}