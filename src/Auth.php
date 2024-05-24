<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Auth
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
     * Get or refresh an access token for the current workspace.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenResponse
     */
    public function getAccessToken(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/auth/access_token');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAccessTokenResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accessToken = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\AccessToken', 'json');
            }
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * Get information about the current user.
     *
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetUserResponse
     */
    public function getUser(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetUserResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/user');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetUserResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->user = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\User', 'json');
            }
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * Get access allowances for a particular workspace
     *
     * Checks if generation is permitted for a particular run of the CLI
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessResponse
     */
    public function getWorkspaceAccess(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/access');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accessDetails = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\AccessDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Validate the current api key.
     *
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse
     */
    public function validateApiKey(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/auth/validate');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiKeyDetails = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiKeyDetails', 'json');
            }
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}