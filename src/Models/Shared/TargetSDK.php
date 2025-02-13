<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class TargetSDK
{
    /**
     * gen.lock ID (expected to be a uuid). The same as `id`. A unique identifier for the target.
     *
     * @var string $generateGenLockId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    public string $generateGenLockId;

    /**
     * eg `typescript`, `terraform`, `python`
     *
     * @var string $generateTarget
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_target')]
    public string $generateTarget;

    /**
     * Unique identifier of the target the same as `generate_gen_lock_id`
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Timestamp when the event was created in the database.
     *
     * @var \DateTime $lastEventCreatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_event_created_at')]
    public \DateTime $lastEventCreatedAt;

    /**
     * Unique identifier of the last event for the target
     *
     * @var string $lastEventId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_event_id')]
    public string $lastEventId;

    /**
     * Type of interaction.
     *
     * @var InteractionType $lastEventInteractionType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_event_interaction_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType')]
    public InteractionType $lastEventInteractionType;

    /**
     * Remote commit ID.
     *
     * @var ?string $commitHead
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('commit_head')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $commitHead = null;

    /**
     * Name of the CI environment.
     *
     * @var ?string $continuousIntegrationEnvironment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('continuous_integration_environment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $continuousIntegrationEnvironment = null;

    /**
     * Error message if the last event was not successful.
     *
     * @var ?string $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * Version of the generated target (post generation)
     *
     * @var ?string $generateConfigPostVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_config_post_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPostVersion = null;

    /**
     * Eligible feature set during generation
     *
     * @var ?string $generateEligibleFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_eligible_features')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateEligibleFeatures = null;

    /**
     * Features prior to generation
     *
     * @var ?string $generateGenLockPreFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_gen_lock_pre_features')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreFeatures = null;

    /**
     * Artifact version for the Previous Generation
     *
     * @var ?string $generateGenLockPreVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_gen_lock_pre_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreVersion = null;

    /**
     * The number of operations ignored in generation.
     *
     * @var ?int $generateNumberOfOperationsIgnored
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_number_of_operations_ignored')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $generateNumberOfOperationsIgnored = null;

    /**
     * The number of operations used in generation.
     *
     * @var ?int $generateNumberOfOperationsUsed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_number_of_operations_used')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $generateNumberOfOperationsUsed = null;

    /**
     * The number of terraform resources used in generation.
     *
     * @var ?int $generateNumberOfTerraformResources
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_number_of_terraform_resources')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $generateNumberOfTerraformResources = null;

    /**
     * Indicates whether the target was considered published.
     *
     * @var ?bool $generatePublished
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_published')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $generatePublished = null;

    /**
     * The workflow name of the target.
     *
     * @var ?string $generateTargetName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_target_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateTargetName = null;

    /**
     * The version of the Speakeasy generator for this target eg v2 of the typescript generator.
     *
     * @var ?string $generateTargetVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generate_target_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $generateTargetVersion = null;

    /**
     * GitHub organization of the action.
     *
     * @var ?string $ghActionOrganization
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gh_action_organization')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionOrganization = null;

    /**
     * GitHub Action ref value.
     *
     * @var ?string $ghActionRef
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gh_action_ref')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRef = null;

    /**
     * GitHub repository of the action.
     *
     * @var ?string $ghActionRepository
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gh_action_repository')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRepository = null;

    /**
     * Link to the GitHub action run.
     *
     * @var ?string $ghActionRunLink
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gh_action_run_link')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRunLink = null;

    /**
     * Version of the GitHub action.
     *
     * @var ?string $ghActionVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gh_action_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionVersion = null;

    /**
     * Current working directory relative to the git root.
     *
     * @var ?string $gitRelativeCwd
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('git_relative_cwd')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRelativeCwd = null;

    /**
     * Default owner for git remote.
     *
     * @var ?string $gitRemoteDefaultOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('git_remote_default_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRemoteDefaultOwner = null;

    /**
     * Default repository name for git remote.
     *
     * @var ?string $gitRemoteDefaultRepo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('git_remote_default_repo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRemoteDefaultRepo = null;

    /**
     * User email from git configuration.
     *
     * @var ?string $gitUserEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('git_user_email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $gitUserEmail = null;

    /**
     * User's name from git configuration. (not GitHub username)
     *
     * @var ?string $gitUserName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('git_user_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $gitUserName = null;

    /**
     * Remote hostname.
     *
     * @var ?string $hostname
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hostname')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hostname = null;

    /**
     * Timestamp when the last publishing event was created.
     *
     * @var ?\DateTime $lastPublishCreatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_publish_created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastPublishCreatedAt = null;

    /**
     * Link to the GitHub action run for the last publishing event.
     *
     * @var ?string $lastPublishGhActionRunLink
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_publish_gh_action_run_link')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastPublishGhActionRunLink = null;

    /**
     * Name of the published package.
     *
     * @var ?string $publishPackageName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publish_package_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageName = null;

    /**
     * Name of the registry where the package was published.
     *
     * @var ?string $publishPackageRegistryName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publish_package_registry_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageRegistryName = null;

    /**
     * URL of the published package.
     *
     * @var ?string $publishPackageUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publish_package_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageUrl = null;

    /**
     * Version of the published package.
     *
     * @var ?string $publishPackageVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('publish_package_version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageVersion = null;

    /**
     * Label of the git repository.
     *
     * @var ?string $repoLabel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('repo_label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $repoLabel = null;

    /**
     * The blob digest of the source.
     *
     * @var ?string $sourceBlobDigest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_blob_digest')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceBlobDigest = null;

    /**
     * The namespace name of the source.
     *
     * @var ?string $sourceNamespaceName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_namespace_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceNamespaceName = null;

    /**
     * The revision digest of the source.
     *
     * @var ?string $sourceRevisionDigest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_revision_digest')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceRevisionDigest = null;

    /**
     * Indicates whether the event was successful.
     *
     * @var ?bool $success
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('success')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $success = null;

    /**
     * Workflow lock file (post execution)
     *
     * @var ?string $workflowLockPostRaw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflow_lock_post_raw')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowLockPostRaw = null;

    /**
     * Workflow lock file (prior to execution)
     *
     * @var ?string $workflowLockPreRaw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflow_lock_pre_raw')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowLockPreRaw = null;

    /**
     * Workflow file (post execution)
     *
     * @var ?string $workflowPostRaw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflow_post_raw')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowPostRaw = null;

    /**
     * Workflow file (prior to execution)
     *
     * @var ?string $workflowPreRaw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workflow_pre_raw')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowPreRaw = null;

    /**
     * @param  string  $generateGenLockId
     * @param  string  $generateTarget
     * @param  string  $id
     * @param  \DateTime  $lastEventCreatedAt
     * @param  string  $lastEventId
     * @param  InteractionType  $lastEventInteractionType
     * @param  ?string  $commitHead
     * @param  ?string  $continuousIntegrationEnvironment
     * @param  ?string  $error
     * @param  ?string  $generateConfigPostVersion
     * @param  ?string  $generateEligibleFeatures
     * @param  ?string  $generateGenLockPreFeatures
     * @param  ?string  $generateGenLockPreVersion
     * @param  ?int  $generateNumberOfOperationsIgnored
     * @param  ?int  $generateNumberOfOperationsUsed
     * @param  ?int  $generateNumberOfTerraformResources
     * @param  ?bool  $generatePublished
     * @param  ?string  $generateTargetName
     * @param  ?string  $generateTargetVersion
     * @param  ?string  $ghActionOrganization
     * @param  ?string  $ghActionRef
     * @param  ?string  $ghActionRepository
     * @param  ?string  $ghActionRunLink
     * @param  ?string  $ghActionVersion
     * @param  ?string  $gitRelativeCwd
     * @param  ?string  $gitRemoteDefaultOwner
     * @param  ?string  $gitRemoteDefaultRepo
     * @param  ?string  $gitUserEmail
     * @param  ?string  $gitUserName
     * @param  ?string  $hostname
     * @param  ?\DateTime  $lastPublishCreatedAt
     * @param  ?string  $lastPublishGhActionRunLink
     * @param  ?string  $publishPackageName
     * @param  ?string  $publishPackageRegistryName
     * @param  ?string  $publishPackageUrl
     * @param  ?string  $publishPackageVersion
     * @param  ?string  $repoLabel
     * @param  ?string  $sourceBlobDigest
     * @param  ?string  $sourceNamespaceName
     * @param  ?string  $sourceRevisionDigest
     * @param  ?bool  $success
     * @param  ?string  $workflowLockPostRaw
     * @param  ?string  $workflowLockPreRaw
     * @param  ?string  $workflowPostRaw
     * @param  ?string  $workflowPreRaw
     * @phpstan-pure
     */
    public function __construct(string $generateGenLockId, string $generateTarget, string $id, \DateTime $lastEventCreatedAt, string $lastEventId, InteractionType $lastEventInteractionType, ?string $commitHead = null, ?string $continuousIntegrationEnvironment = null, ?string $error = null, ?string $generateConfigPostVersion = null, ?string $generateEligibleFeatures = null, ?string $generateGenLockPreFeatures = null, ?string $generateGenLockPreVersion = null, ?int $generateNumberOfOperationsIgnored = null, ?int $generateNumberOfOperationsUsed = null, ?int $generateNumberOfTerraformResources = null, ?bool $generatePublished = null, ?string $generateTargetName = null, ?string $generateTargetVersion = null, ?string $ghActionOrganization = null, ?string $ghActionRef = null, ?string $ghActionRepository = null, ?string $ghActionRunLink = null, ?string $ghActionVersion = null, ?string $gitRelativeCwd = null, ?string $gitRemoteDefaultOwner = null, ?string $gitRemoteDefaultRepo = null, ?string $gitUserEmail = null, ?string $gitUserName = null, ?string $hostname = null, ?\DateTime $lastPublishCreatedAt = null, ?string $lastPublishGhActionRunLink = null, ?string $publishPackageName = null, ?string $publishPackageRegistryName = null, ?string $publishPackageUrl = null, ?string $publishPackageVersion = null, ?string $repoLabel = null, ?string $sourceBlobDigest = null, ?string $sourceNamespaceName = null, ?string $sourceRevisionDigest = null, ?bool $success = null, ?string $workflowLockPostRaw = null, ?string $workflowLockPreRaw = null, ?string $workflowPostRaw = null, ?string $workflowPreRaw = null)
    {
        $this->generateGenLockId = $generateGenLockId;
        $this->generateTarget = $generateTarget;
        $this->id = $id;
        $this->lastEventCreatedAt = $lastEventCreatedAt;
        $this->lastEventId = $lastEventId;
        $this->lastEventInteractionType = $lastEventInteractionType;
        $this->commitHead = $commitHead;
        $this->continuousIntegrationEnvironment = $continuousIntegrationEnvironment;
        $this->error = $error;
        $this->generateConfigPostVersion = $generateConfigPostVersion;
        $this->generateEligibleFeatures = $generateEligibleFeatures;
        $this->generateGenLockPreFeatures = $generateGenLockPreFeatures;
        $this->generateGenLockPreVersion = $generateGenLockPreVersion;
        $this->generateNumberOfOperationsIgnored = $generateNumberOfOperationsIgnored;
        $this->generateNumberOfOperationsUsed = $generateNumberOfOperationsUsed;
        $this->generateNumberOfTerraformResources = $generateNumberOfTerraformResources;
        $this->generatePublished = $generatePublished;
        $this->generateTargetName = $generateTargetName;
        $this->generateTargetVersion = $generateTargetVersion;
        $this->ghActionOrganization = $ghActionOrganization;
        $this->ghActionRef = $ghActionRef;
        $this->ghActionRepository = $ghActionRepository;
        $this->ghActionRunLink = $ghActionRunLink;
        $this->ghActionVersion = $ghActionVersion;
        $this->gitRelativeCwd = $gitRelativeCwd;
        $this->gitRemoteDefaultOwner = $gitRemoteDefaultOwner;
        $this->gitRemoteDefaultRepo = $gitRemoteDefaultRepo;
        $this->gitUserEmail = $gitUserEmail;
        $this->gitUserName = $gitUserName;
        $this->hostname = $hostname;
        $this->lastPublishCreatedAt = $lastPublishCreatedAt;
        $this->lastPublishGhActionRunLink = $lastPublishGhActionRunLink;
        $this->publishPackageName = $publishPackageName;
        $this->publishPackageRegistryName = $publishPackageRegistryName;
        $this->publishPackageUrl = $publishPackageUrl;
        $this->publishPackageVersion = $publishPackageVersion;
        $this->repoLabel = $repoLabel;
        $this->sourceBlobDigest = $sourceBlobDigest;
        $this->sourceNamespaceName = $sourceNamespaceName;
        $this->sourceRevisionDigest = $sourceRevisionDigest;
        $this->success = $success;
        $this->workflowLockPostRaw = $workflowLockPostRaw;
        $this->workflowLockPreRaw = $workflowLockPreRaw;
        $this->workflowPostRaw = $workflowPostRaw;
        $this->workflowPreRaw = $workflowPreRaw;
    }
}