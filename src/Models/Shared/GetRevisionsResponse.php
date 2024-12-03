<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class GetRevisionsResponse
{
    /**
     * $items
     *
     * @var array<Revision> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Revision>')]
    public array $items;

    /**
     *
     * @var string $nextPageToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next_page_token')]
    public string $nextPageToken;

    /**
     * @param  array<Revision>  $items
     * @param  string  $nextPageToken
     */
    public function __construct(array $items, string $nextPageToken)
    {
        $this->items = $items;
        $this->nextPageToken = $nextPageToken;
    }
}