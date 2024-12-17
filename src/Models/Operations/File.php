<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class File
{
    /**
     *
     * @var string $content
     */
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;

    /**
     *
     * @var string $fileName
     */
    #[SpeakeasyMetadata('multipartForm:name=fileName')]
    public string $fileName;

    /**
     * @param  string  $content
     * @param  string  $fileName
     */
    public function __construct(string $content, string $fileName)
    {
        $this->content = $content;
        $this->fileName = $fileName;
    }
}