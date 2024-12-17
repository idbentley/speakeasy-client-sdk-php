<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Diagnostic
{
    /**
     * Message describing the issue
     *
     * @var string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     * Schema path to the issue
     *
     * @var array<string> $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $path;

    /**
     * Issue type
     *
     * @var string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * Help message for how to fix the issue
     *
     * @var ?string $helpMessage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('helpMessage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $helpMessage = null;

    /**
     * @param  string  $message
     * @param  array<string>  $path
     * @param  string  $type
     * @param  ?string  $helpMessage
     */
    public function __construct(string $message, array $path, string $type, ?string $helpMessage = null)
    {
        $this->message = $message;
        $this->path = $path;
        $this->type = $type;
        $this->helpMessage = $helpMessage;
    }
}