<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetBlobRequest
{
    /**
     *
     * @var string $digest
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=digest')]
    public string $digest;

    /**
     *
     * @var string $namespaceName
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    /**
     *
     * @var string $organizationSlug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organization_slug')]
    public string $organizationSlug;

    /**
     *
     * @var string $workspaceSlug
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_slug')]
    public string $workspaceSlug;

    /**
     * @param  ?string  $digest
     * @param  ?string  $namespaceName
     * @param  ?string  $organizationSlug
     * @param  ?string  $workspaceSlug
     */
    public function __construct(?string $digest = null, ?string $namespaceName = null, ?string $organizationSlug = null, ?string $workspaceSlug = null)
    {
        $this->digest = $digest;
        $this->namespaceName = $namespaceName;
        $this->organizationSlug = $organizationSlug;
        $this->workspaceSlug = $workspaceSlug;
    }
}