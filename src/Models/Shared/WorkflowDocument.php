<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** WorkflowDocument - A document referenced by a workflow */
class WorkflowDocument
{
    /**
     *
     * @var string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    public string $location;

    /**
     *
     * @var ?Auth $auth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('auth')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Auth|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Auth $auth = null;

    /**
     * @param  string  $location
     * @param  ?Auth  $auth
     * @phpstan-pure
     */
    public function __construct(string $location, ?Auth $auth = null)
    {
        $this->location = $location;
        $this->auth = $auth;
    }
}