<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use JMS\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

class Suggest
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Generate suggestions for improving an OpenAPI document.
     *
     * Get suggestions from an LLM model for improving an OpenAPI document.
     *
     * @param  Operations\SuggestRequest  $request
     * @return Operations\SuggestResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function suggest(Operations\SuggestRequest $request): Operations\SuggestResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/suggest/openapi_from_summary');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'suggestRequestBody', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\SuggestResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schema: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Generate generic suggestions for a list of items.
     *
     * @param  Shared\SuggestItemsRequestBody  $request
     * @return Operations\SuggestItemsResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function suggestItems(Shared\SuggestItemsRequestBody $request): Operations\SuggestItemsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/suggest/items');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\SuggestItemsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    strings: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * (DEPRECATED) Generate suggestions for improving an OpenAPI document.
     *
     * Get suggestions from an LLM model for improving an OpenAPI document.
     *
     * @param  Operations\SuggestOpenAPIRequest  $request
     * @return Operations\SuggestOpenAPIResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function suggestOpenAPI(Operations\SuggestOpenAPIRequest $request): Operations\SuggestOpenAPIResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/suggest/openapi');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'multipart');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\SuggestOpenAPIResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schema: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Generate suggestions for improving an OpenAPI document stored in the registry.
     *
     * Get suggestions from an LLM model for improving an OpenAPI document stored in the registry.
     *
     * @param  Operations\SuggestOpenAPIRegistryRequest  $request
     * @return Operations\SuggestOpenAPIRegistryResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function suggestOpenAPIRegistry(Operations\SuggestOpenAPIRegistryRequest $request): Operations\SuggestOpenAPIRegistryResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/suggest/openapi/{namespace_name}/{revision_reference}', Operations\SuggestOpenAPIRegistryRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'suggestRequestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\SuggestOpenAPIRegistryResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schema: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}