<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** enum value workspace feature flag */
enum WorkspaceFeatureFlag: string
{
    case SchemaRegistry = 'schema_registry';
    case ChangesReport = 'changes_report';
    case SkipSchemaRegistry = 'skip_schema_registry';
    case Webhooks = 'webhooks';
}
