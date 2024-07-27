<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GithubCheckPublishingSecretsRequest
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=generate_gen_lock_id')]
    public string $generateGenLockId;

    public function __construct()
    {
        $this->generateGenLockId = '';
    }
}