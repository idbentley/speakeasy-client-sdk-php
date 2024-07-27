<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class SuggestOperationIDsRegistryResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * OK
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestedOperationIDs $suggestedOperationIDs
     */
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestedOperationIDs $suggestedOperationIDs = null;

    public function __construct()
    {
        $this->contentType = '';
        $this->statusCode = 0;
        $this->rawResponse = null;
        $this->suggestedOperationIDs = null;
    }
}