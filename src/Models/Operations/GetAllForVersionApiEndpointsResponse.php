<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Errors;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
class GetAllForVersionApiEndpointsResponse
{
    /**
     * OK
     *
     * @var ?array<Shared\ApiEndpoint> $apiEndpoints
     */
    public ?array $apiEndpoints = null;

    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Default error response
     *
     * @var ?Errors\Error $error
     */
    public ?Errors\Error $error = null;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * @param  ?string  $contentType
     * @param  ?int  $statusCode
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?array<Shared\ApiEndpoint>  $apiEndpoints
     * @param  ?Errors\Error  $error
     */
    public function __construct(?string $contentType = null, ?int $statusCode = null, ?\Psr\Http\Message\ResponseInterface $rawResponse = null, ?array $apiEndpoints = null, ?Errors\Error $error = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->apiEndpoints = $apiEndpoints;
        $this->error = $error;
    }
}