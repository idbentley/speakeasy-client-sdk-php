<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class UsageSnippet
{
    /**
     * The code snippet
     *
     * @var string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    public string $code;

    /**
     * The language of the snippet
     *
     * @var string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    public string $language;

    /**
     * The HTTP method of the operation
     *
     * @var mixed $method
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    public mixed $method;

    /**
     * The operation ID for the snippet
     *
     * @var string $operationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operationId')]
    public string $operationId;

    /**
     * The path of the operation
     *
     * @var string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    public string $path;

    /**
     * @param  string  $code
     * @param  string  $language
     * @param  mixed  $method
     * @param  string  $operationId
     * @param  string  $path
     */
    public function __construct(string $code, string $language, mixed $method, string $operationId, string $path)
    {
        $this->code = $code;
        $this->language = $language;
        $this->method = $method;
        $this->operationId = $operationId;
        $this->path = $path;
    }
}