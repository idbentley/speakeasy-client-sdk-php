<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

/**
 * SDK - The Speakeasy API allows teams to manage common operations with their APIs
 * 
 * https://docs.speakeasyapi.dev - The Speakeasy Platform Documentation
 * 
 * @package Speakeasy\SpeakeasyClientSDK
 * @access public
 * @see https://docs.speakeasyapi.dev
 */
class SDK
{
	public const SERVER_PROD = 'prod';
	
	public const SERVERS = [
		SDK::SERVER_PROD => 'https://api.prod.speakeasyapi.dev',
	];
  	
    /**
     * REST APIs for managing ApiEndpoint entities
     * 
     * @var ApiEndpoints $$apiEndpoints
     */
	public ApiEndpoints $apiEndpoints;
	
    /**
     * REST APIs for managing Api entities
     * 
     * @var Apis $$apis
     */
	public Apis $apis;
	
    /**
     * REST APIs for managing embeds
     * 
     * @var Embeds $$embeds
     */
	public Embeds $embeds;
	
    /**
     * REST APIs for managing Version Metadata entities
     * 
     * @var Metadata $$metadata
     */
	public Metadata $metadata;
	
    /**
     * REST APIs for managing and running plugins
     * 
     * @var Plugins $$plugins
     */
	public Plugins $plugins;
	
    /**
     * REST APIs for retrieving request information
     * 
     * @var Requests $$requests
     */
	public Requests $requests;
	
    /**
     * REST APIs for managing Schema entities
     * 
     * @var Schemas $$schemas
     */
	public Schemas $schemas;
		
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	private ?Models\Shared\Security $_security;
	private string $_serverUrl;
	private string $_language = 'php';
	private string $_sdkVersion = '0.13.0';
	private string $_genVersion = '2.19.1';

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SDKBuilder
	 */
	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client	 
	 * @param Models\Shared\Security|null $security
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, ?Models\Shared\Security $security, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($security !== null) {
			$this->_security = $security;
			$this->_securityClient = Utils\Utils::configureSecurityClient($this->_defaultClient, $this->_security);
		}
		
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[SDK::SERVER_PROD];
		}
		
		$this->apiEndpoints = new ApiEndpoints(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->apis = new Apis(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->embeds = new Embeds(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->metadata = new Metadata(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->plugins = new Plugins(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->requests = new Requests(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->schemas = new Schemas(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
	
    /**
     * Validate the current api key.
     * 
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse
     */
	public function validateApiKey(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/auth/validate');
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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