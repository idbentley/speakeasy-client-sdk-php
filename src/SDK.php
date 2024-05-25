<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

/**
 * SDK - Speakeasy API: The Speakeasy API allows teams to manage common operations with their APIs
 *
 * /docs - The Speakeasy Platform Documentation
 *
 * @see /docs
 */
class SDK
{
    public const SERVER_PROD = 'prod';

    public const SERVERS = [
        SDK::SERVER_PROD => 'https://api.prod.speakeasyapi.dev',
    ];

    /**
     * REST APIs for managing Api entities
     *
     * @var Apis $$apis
     */
    public Apis $apis;

    /**
     * REST APIs for managing ApiEndpoint entities
     *
     * @var ApiEndpoints $$apiEndpoints
     */
    public ApiEndpoints $apiEndpoints;

    /**
     * REST APIs for managing Version Metadata entities
     *
     * @var Metadata $$metadata
     */
    public Metadata $metadata;

    /**
     * REST APIs for managing Schema entities
     *
     * @var Schemas $$schemas
     */
    public Schemas $schemas;

    public Artifacts $artifacts;

    /**
     * REST APIs for managing Authentication
     *
     * @var Auth $$auth
     */
    public Auth $auth;

    /**
     * REST APIs for retrieving request information
     *
     * @var Requests $$requests
     */
    public Requests $requests;

    public Github $github;

    public Organizations $organizations;

    /**
     * REST APIs for managing reports
     *
     * @var Reports $$reports
     */
    public Reports $reports;

    /**
     * REST APIs for managing LLM OAS suggestions
     *
     * @var Suggest $$suggest
     */
    public Suggest $suggest;

    /**
     * REST APIs for managing embeds
     *
     * @var Embeds $$embeds
     */
    public Embeds $embeds;

    /**
     * REST APIs for capturing event data
     *
     * @var Events $$events
     */
    public Events $events;

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
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        private SDKConfiguration $sdkConfiguration,
    ) {
        $this->apis = new Apis($this->sdkConfiguration);
        $this->apiEndpoints = new ApiEndpoints($this->sdkConfiguration);
        $this->metadata = new Metadata($this->sdkConfiguration);
        $this->schemas = new Schemas($this->sdkConfiguration);
        $this->artifacts = new Artifacts($this->sdkConfiguration);
        $this->auth = new Auth($this->sdkConfiguration);
        $this->requests = new Requests($this->sdkConfiguration);
        $this->github = new Github($this->sdkConfiguration);
        $this->organizations = new Organizations($this->sdkConfiguration);
        $this->reports = new Reports($this->sdkConfiguration);
        $this->suggest = new Suggest($this->sdkConfiguration);
        $this->embeds = new Embeds($this->sdkConfiguration);
        $this->events = new Events($this->sdkConfiguration);
    }
}