<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Schemas 
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
     * Delete a particular schema revision for an Api.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse
     */
	public function deleteSchema(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse();
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
     * Download the latest schema for a particular apiID.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse
     */
	public function downloadSchema(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/download', \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->twoHundredApplicationJsonSchema = $httpResponse->getBody()->getContents();
            }
            if (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $response->twoHundredApplicationXYamlSchema = $httpResponse->getBody()->getContents();
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
     * Download a particular schema revision for an Api.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse
     */
	public function downloadSchemaRevision(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}/download', \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->twoHundredApplicationJsonSchema = $httpResponse->getBody()->getContents();
            }
            if (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $response->twoHundredApplicationXYamlSchema = $httpResponse->getBody()->getContents();
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
     * Get information about the latest schema.
     * 
     * Returns information about the last uploaded schema for a particular API version. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse
     */
	public function getSchema(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json');
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
     * Get a diff of two schema revisions for an Api.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse
     */
	public function getSchemaDiff(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{baseRevisionID}/diff/{targetRevisionID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schemaDiff = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemaDiff', 'json');
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
     * Get information about a particular schema revision for an Api.
     * 
     * Returns information about the last uploaded schema for a particular schema revision. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse
     */
	public function getSchemaRevision(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json');
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
     * Get information about all schemas associated with a particular apiID.
     * 
     * Returns information the schemas associated with a particular apiID. 
     * This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse
     */
	public function getSchemas(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schemas', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->classes = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema>', 'json');
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
     * Register a schema.
     * 
     * Allows uploading a schema for a particular API version.
     * This will be used to populate ApiEndpoints and used as a base for any schema generation if present.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse
     */
	public function registerSchema(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "multipart");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse();
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
}