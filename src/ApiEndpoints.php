<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class ApiEndpoints 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Delete an ApiEndpoint.
     * 
     * Delete an ApiEndpoint. This will also delete all associated Request Logs (if using a Postgres datastore).
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse
     */
	public function deleteApiEndpoint(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Find an ApiEndpoint via its displayName.
     * 
     * Find an ApiEndpoint via its displayName (set by operationId from a registered OpenAPI schema).
     * This is useful for finding the ID of an ApiEndpoint to use in the /v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID} endpoints.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse
     */
	public function findApiEndpoint(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/find/{displayName}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate an OpenAPI specification for a particular ApiEndpoint.
     * 
     * This endpoint will generate a new operation in any registered OpenAPI document if the operation does not already exist in the document.
     * Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse
     */
	public function generateOpenApiSpecForApiEndpoint(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/openapi', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generateOpenApiSpecDiff = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateOpenApiSpecDiff', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate a Postman collection for a particular ApiEndpoint.
     * 
     * Generates a postman collection that allows the endpoint to be called from postman variables produced for any path/query/header parameters included in the OpenAPI document.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse
     */
	public function generatePostmanCollectionForApiEndpoint(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/postman', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/octet-stream;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $response->postmanCollection = $httpResponse->getBody()->getContents();
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all Api endpoints for a particular apiID.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse
     */
	public function getAllApiEndpoints(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/api_endpoints', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoints = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all ApiEndpoints for a particular apiID and versionID.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse
     */
	public function getAllForVersionApiEndpoints(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoints = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get an ApiEndpoint.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse
     */
	public function getApiEndpoint(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Upsert an ApiEndpoint.
     * 
     * Upsert an ApiEndpoint. If the ApiEndpoint does not exist it will be created, otherwise it will be updated.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse
     */
	public function upsertApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "apiEndpoint", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}