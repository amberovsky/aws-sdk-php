<?php
// This file was auto-generated from sdk-root/src/data/license-manager/2018-08-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname> AWS License Manager </fullname> <p> <i>This is the AWS License Manager API Reference.</i> It provides descriptions, syntax, and usage examples for each of the actions and data types for License Manager. The topic for each action shows the Query API request parameters and the XML response. You can also view the XML request elements in the WSDL. </p> <p> Alternatively, you can use one of the AWS SDKs to access an API that\'s tailored to the programming language or platform that you\'re using. For more information, see <a href="http://aws.amazon.com/tools/#SDKs">AWS SDKs</a>. </p>', 'operations' => [ 'CreateLicenseConfiguration' => '<p>Creates a new license configuration object. A license configuration is an abstraction of a customer license agreement that can be consumed and enforced by License Manager. Components include specifications for the license type (licensing by instance, socket, CPU, or VCPU), tenancy (shared tenancy, Amazon EC2 Dedicated Instance, Amazon EC2 Dedicated Host, or any of these), host affinity (how long a VM must be associated with a host), the number of licenses purchased and used.</p>', 'DeleteLicenseConfiguration' => '<p>Deletes an existing license configuration. This action fails if the configuration is in use.</p>', 'GetLicenseConfiguration' => '<p>Returns a detailed description of a license configuration.</p>', 'GetServiceSettings' => '<p>Gets License Manager settings for a region. Exposes the configured S3 bucket, SNS topic, etc., for inspection. </p>', 'ListAssociationsForLicenseConfiguration' => '<p>Lists the resource associations for a license configuration. Resource associations need not consume licenses from a license configuration. For example, an AMI or a stopped instance may not consume a license (depending on the license rules). Use this operation to find all resources associated with a license configuration.</p>', 'ListLicenseConfigurations' => '<p>Lists license configuration objects for an account, each containing the name, description, license type, and other license terms modeled from a license agreement.</p>', 'ListLicenseSpecificationsForResource' => '<p>Returns the license configuration for a resource.</p>', 'ListResourceInventory' => '<p>Returns a detailed list of resources.</p>', 'ListTagsForResource' => '<p>Lists tags attached to a resource.</p>', 'ListUsageForLicenseConfiguration' => '<p>Lists all license usage records for a license configuration, displaying license consumption details by resource at a selected point in time. Use this action to audit the current license consumption for any license inventory and configuration.</p>', 'TagResource' => '<p>Attach one of more tags to any resource.</p>', 'UntagResource' => '<p>Remove tags from a resource.</p>', 'UpdateLicenseConfiguration' => '<p>Modifies the attributes of an existing license configuration object. A license configuration is an abstraction of a customer license agreement that can be consumed and enforced by License Manager. Components include specifications for the license type (Instances, cores, sockets, VCPUs), tenancy (shared or Dedicated Host), host affinity (how long a VM is associated with a host), the number of licenses purchased and used.</p>', 'UpdateLicenseSpecificationsForResource' => '<p>Adds or removes license configurations for a specified AWS resource. This operation currently supports updating the license specifications of AMIs, instances, and hosts. Launch templates and AWS CloudFormation templates are not managed from this operation as those resources send the license configurations directly to a resource creation operation, such as <code>RunInstances</code>.</p>', 'UpdateServiceSettings' => '<p>Updates License Manager service settings.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>Access to resource denied.</p>', 'refs' => [], ], 'AuthorizationException' => [ 'base' => '<p>The AWS user account does not have permission to perform the action. Check the IAM policy associated with this account.</p>', 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'OrganizationConfiguration$EnableIntegration' => '<p>Flag to activate AWS Organization integration.</p>', ], ], 'BoxBoolean' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseCountHardLimit' => '<p>Flag indicating whether hard or soft license enforcement is used. Exceeding a hard limit results in the blocked deployment of new instances.</p>', 'GetLicenseConfigurationResponse$LicenseCountHardLimit' => '<p>Sets the number of available licenses as a hard limit.</p>', 'GetServiceSettingsResponse$EnableCrossAccountsDiscovery' => '<p>Indicates whether cross-account discovery has been enabled.</p>', 'LicenseConfiguration$LicenseCountHardLimit' => '<p>Sets the number of available licenses as a hard limit.</p>', 'UpdateLicenseConfigurationRequest$LicenseCountHardLimit' => '<p>Sets the number of available licenses as a hard limit.</p>', 'UpdateServiceSettingsRequest$EnableCrossAccountsDiscovery' => '<p>Activates cross-account discovery.</p>', ], ], 'BoxInteger' => [ 'base' => NULL, 'refs' => [ 'ListAssociationsForLicenseConfigurationRequest$MaxResults' => '<p>Maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListLicenseConfigurationsRequest$MaxResults' => '<p>Maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListLicenseSpecificationsForResourceRequest$MaxResults' => '<p>Maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListResourceInventoryRequest$MaxResults' => '<p>Maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', 'ListUsageForLicenseConfigurationRequest$MaxResults' => '<p>Maximum number of results to return in a single call. To retrieve the remaining results, make another call with the returned <code>NextToken</code> value.</p>', ], ], 'BoxLong' => [ 'base' => NULL, 'refs' => [ 'ConsumedLicenseSummary$ConsumedLicenses' => '<p>Number of licenses consumed by a resource.</p>', 'CreateLicenseConfigurationRequest$LicenseCount' => '<p>Number of licenses managed by the license configuration.</p>', 'GetLicenseConfigurationResponse$LicenseCount' => '<p>Number of available licenses.</p>', 'GetLicenseConfigurationResponse$ConsumedLicenses' => '<p>Number of licenses assigned to resources.</p>', 'LicenseConfiguration$LicenseCount' => '<p>Number of licenses managed by the license configuration.</p>', 'LicenseConfiguration$ConsumedLicenses' => '<p>Number of licenses consumed. </p>', 'LicenseConfigurationUsage$ConsumedLicenses' => '<p>Number of licenses consumed out of the total provisioned in the license configuration.</p>', 'ManagedResourceSummary$AssociationCount' => '<p>Number of resources associated with licenses.</p>', 'UpdateLicenseConfigurationRequest$LicenseCount' => '<p>New number of licenses managed by the license configuration.</p>', ], ], 'ConsumedLicenseSummary' => [ 'base' => '<p>Details about license consumption.</p>', 'refs' => [ 'ConsumedLicenseSummaryList$member' => NULL, ], ], 'ConsumedLicenseSummaryList' => [ 'base' => NULL, 'refs' => [ 'GetLicenseConfigurationResponse$ConsumedLicenseSummaryList' => '<p>List of summaries for consumed licenses used by various resources.</p>', 'LicenseConfiguration$ConsumedLicenseSummaryList' => '<p>List of summaries for licenses consumed by various resources.</p>', ], ], 'CreateLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DateTime' => [ 'base' => NULL, 'refs' => [ 'LicenseConfigurationAssociation$AssociationTime' => '<p>Time when the license configuration was associated with the resource.</p>', 'LicenseConfigurationUsage$AssociationTime' => '<p>Time when the license configuration was initially associated with a resource.</p>', ], ], 'DeleteLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'FailedDependencyException' => [ 'base' => '<p>A dependency required to run the API is missing.</p>', 'refs' => [], ], 'Filter' => [ 'base' => '<p>A filter name and value pair that is used to return a more specific list of results from a describe operation. Filters can be used to match a set of resources by specific criteria, such as tags, attributes, or IDs. The filters supported by a <code>Describe</code> operation are documented with the <code>Describe</code> operation.</p>', 'refs' => [ 'Filters$member' => NULL, ], ], 'FilterLimitExceededException' => [ 'base' => '<p>The request uses too many filters or too many filter values.</p>', 'refs' => [], ], 'FilterName' => [ 'base' => NULL, 'refs' => [ 'Filter$Name' => '<p>Name of the filter. Filter names are case-sensitive.</p>', ], ], 'FilterValue' => [ 'base' => NULL, 'refs' => [ 'FilterValues$member' => NULL, ], ], 'FilterValues' => [ 'base' => NULL, 'refs' => [ 'Filter$Values' => '<p>One or more filter values. Filter values are case-sensitive.</p>', ], ], 'Filters' => [ 'base' => NULL, 'refs' => [ 'ListLicenseConfigurationsRequest$Filters' => '<p>One or more filters.</p>', 'ListUsageForLicenseConfigurationRequest$Filters' => '<p>List of filters to apply.</p>', ], ], 'GetLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetServiceSettingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetServiceSettingsResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidParameterValueException' => [ 'base' => '<p>One or more parameter values are not valid.</p>', 'refs' => [], ], 'InvalidResourceStateException' => [ 'base' => '<p>License Manager cannot allocate a license to a resource because of its state. </p> <p>For example, you cannot allocate a license to an instance in the process of shutting down.</p>', 'refs' => [], ], 'InventoryFilter' => [ 'base' => '<p>An inventory filter object.</p>', 'refs' => [ 'InventoryFilterList$member' => NULL, ], ], 'InventoryFilterCondition' => [ 'base' => NULL, 'refs' => [ 'InventoryFilter$Condition' => '<p>The condition of the filter.</p>', ], ], 'InventoryFilterList' => [ 'base' => NULL, 'refs' => [ 'ListResourceInventoryRequest$Filters' => '<p>One or more filters.</p>', ], ], 'LicenseConfiguration' => [ 'base' => '<p>A license configuration is an abstraction of a customer license agreement that can be consumed and enforced by License Manager. Components include specifications for the license type (licensing by instance, socket, CPU, or VCPU), tenancy (shared tenancy, Amazon EC2 Dedicated Instance, Amazon EC2 Dedicated Host, or any of these), host affinity (how long a VM must be associated with a host), the number of licenses purchased and used.</p>', 'refs' => [ 'LicenseConfigurations$member' => NULL, ], ], 'LicenseConfigurationAssociation' => [ 'base' => '<p>Describes a server resource that is associated with a license configuration.</p>', 'refs' => [ 'LicenseConfigurationAssociations$member' => NULL, ], ], 'LicenseConfigurationAssociations' => [ 'base' => NULL, 'refs' => [ 'ListAssociationsForLicenseConfigurationResponse$LicenseConfigurationAssociations' => '<p>Lists association objects for the license configuration, each containing the association time, number of consumed licenses, resource ARN, resource ID, account ID that owns the resource, resource size, and resource type.</p>', ], ], 'LicenseConfigurationStatus' => [ 'base' => NULL, 'refs' => [ 'UpdateLicenseConfigurationRequest$LicenseConfigurationStatus' => '<p>New status of the license configuration (<code>ACTIVE</code> or <code>INACTIVE</code>).</p>', ], ], 'LicenseConfigurationUsage' => [ 'base' => '<p>Contains details of the usage of each resource from the license pool.</p>', 'refs' => [ 'LicenseConfigurationUsageList$member' => NULL, ], ], 'LicenseConfigurationUsageList' => [ 'base' => NULL, 'refs' => [ 'ListUsageForLicenseConfigurationResponse$LicenseConfigurationUsageList' => '<p>An array of <code>LicenseConfigurationUsage</code> objects.</p>', ], ], 'LicenseConfigurations' => [ 'base' => NULL, 'refs' => [ 'ListLicenseConfigurationsResponse$LicenseConfigurations' => '<p>Array of license configuration objects.</p>', ], ], 'LicenseCountingType' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseCountingType' => '<p>Dimension to use to track the license inventory.</p>', 'GetLicenseConfigurationResponse$LicenseCountingType' => '<p>Dimension on which the licenses are counted (for example, instances, cores, sockets, or VCPUs).</p>', 'LicenseConfiguration$LicenseCountingType' => '<p>Dimension to use to track license inventory.</p>', ], ], 'LicenseSpecification' => [ 'base' => '<p>Object used for associating a license configuration with a resource.</p>', 'refs' => [ 'LicenseSpecifications$member' => NULL, ], ], 'LicenseSpecifications' => [ 'base' => NULL, 'refs' => [ 'ListLicenseSpecificationsForResourceResponse$LicenseSpecifications' => '<p>License configurations associated with a resource.</p>', 'UpdateLicenseSpecificationsForResourceRequest$AddLicenseSpecifications' => '<p>License configuration ARNs to be added to a resource.</p>', 'UpdateLicenseSpecificationsForResourceRequest$RemoveLicenseSpecifications' => '<p>License configuration ARNs to be removed from a resource.</p>', ], ], 'LicenseUsageException' => [ 'base' => '<p>You do not have enough licenses available to support a new resource launch.</p>', 'refs' => [], ], 'ListAssociationsForLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAssociationsForLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseConfigurationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseConfigurationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseSpecificationsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListLicenseSpecificationsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceInventoryRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListResourceInventoryResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListUsageForLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListUsageForLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'ManagedResourceSummary' => [ 'base' => '<p>Summary for a resource.</p>', 'refs' => [ 'ManagedResourceSummaryList$member' => NULL, ], ], 'ManagedResourceSummaryList' => [ 'base' => NULL, 'refs' => [ 'GetLicenseConfigurationResponse$ManagedResourceSummaryList' => '<p>List of summaries of managed resources.</p>', 'LicenseConfiguration$ManagedResourceSummaryList' => '<p>List of summaries for managed resources.</p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'AuthorizationException$Message' => NULL, 'FailedDependencyException$Message' => NULL, 'FilterLimitExceededException$Message' => NULL, 'InvalidParameterValueException$Message' => NULL, 'InvalidResourceStateException$Message' => NULL, 'LicenseUsageException$Message' => NULL, 'RateLimitExceededException$Message' => NULL, 'ResourceLimitExceededException$Message' => NULL, 'ServerInternalException$Message' => NULL, ], ], 'OrganizationConfiguration' => [ 'base' => '<p>Object containing configuration information for AWS Organizations.</p>', 'refs' => [ 'GetServiceSettingsResponse$OrganizationConfiguration' => '<p>Indicates whether AWS Organizations has been integrated with License Manager for cross-account discovery.</p>', 'UpdateServiceSettingsRequest$OrganizationConfiguration' => '<p>Integrates AWS Organizations with License Manager for cross-account discovery.</p>', ], ], 'RateLimitExceededException' => [ 'base' => '<p>Too many requests have been submitted. Try again after a brief wait.</p>', 'refs' => [], ], 'ResourceInventory' => [ 'base' => '<p>A set of attributes that describe a resource.</p>', 'refs' => [ 'ResourceInventoryList$member' => NULL, ], ], 'ResourceInventoryList' => [ 'base' => NULL, 'refs' => [ 'ListResourceInventoryResponse$ResourceInventoryList' => '<p>The detailed list of resources.</p>', ], ], 'ResourceLimitExceededException' => [ 'base' => '<p>Your resource limits have been exceeded.</p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ConsumedLicenseSummary$ResourceType' => '<p>Resource type of the resource consuming a license (instance, host, or AMI).</p>', 'LicenseConfigurationAssociation$ResourceType' => '<p>Type of server resource.</p>', 'LicenseConfigurationUsage$ResourceType' => '<p>Type of resource associated with athe license configuration.</p>', 'ManagedResourceSummary$ResourceType' => '<p>Type of resource associated with a license (instance, host, or AMI).</p>', 'ResourceInventory$ResourceType' => '<p>The type of resource.</p>', ], ], 'ServerInternalException' => [ 'base' => '<p>The server experienced an internal error. Try again.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$Name' => '<p>Name of the license configuration.</p>', 'CreateLicenseConfigurationRequest$Description' => '<p>Human-friendly description of the license configuration.</p>', 'CreateLicenseConfigurationResponse$LicenseConfigurationArn' => '<p>ARN of the license configuration object after its creation.</p>', 'DeleteLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>Unique ID of the configuration object to delete.</p>', 'GetLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>ARN of the license configuration being requested.</p>', 'GetLicenseConfigurationResponse$LicenseConfigurationId' => '<p>Unique ID for the license configuration.</p>', 'GetLicenseConfigurationResponse$LicenseConfigurationArn' => '<p>ARN of the license configuration requested.</p>', 'GetLicenseConfigurationResponse$Name' => '<p>Name of the license configuration.</p>', 'GetLicenseConfigurationResponse$Description' => '<p>Description of the license configuration.</p>', 'GetLicenseConfigurationResponse$Status' => '<p>License configuration status (active, etc.).</p>', 'GetLicenseConfigurationResponse$OwnerAccountId' => '<p>Owner account ID for the license configuration.</p>', 'GetServiceSettingsResponse$S3BucketArn' => '<p>Regional S3 bucket path for storing reports, license trail event data, discovery data, etc.</p>', 'GetServiceSettingsResponse$SnsTopicArn' => '<p>SNS topic configured to receive notifications from License Manager.</p>', 'InventoryFilter$Name' => '<p>The name of the filter.</p>', 'InventoryFilter$Value' => '<p>Value of the filter.</p>', 'LicenseConfiguration$LicenseConfigurationId' => '<p>Unique ID of the <code>LicenseConfiguration</code> object.</p>', 'LicenseConfiguration$LicenseConfigurationArn' => '<p>ARN of the <code>LicenseConfiguration</code> object.</p>', 'LicenseConfiguration$Name' => '<p>Name of the license configuration.</p>', 'LicenseConfiguration$Description' => '<p>Description of the license configuration.</p>', 'LicenseConfiguration$Status' => '<p>Status of the license configuration.</p>', 'LicenseConfiguration$OwnerAccountId' => '<p>Account ID of the license configuration\'s owner.</p>', 'LicenseConfigurationAssociation$ResourceArn' => '<p>ARN of the resource associated with the license configuration.</p>', 'LicenseConfigurationAssociation$ResourceOwnerId' => '<p>ID of the AWS account that owns the resource consuming licenses.</p>', 'LicenseConfigurationUsage$ResourceArn' => '<p>ARN of the resource associated with a license configuration.</p>', 'LicenseConfigurationUsage$ResourceStatus' => '<p>Status of a resource associated with the license configuration.</p>', 'LicenseConfigurationUsage$ResourceOwnerId' => '<p>ID of the account that owns a resource that is associated with the license configuration.</p>', 'LicenseSpecification$LicenseConfigurationArn' => '<p>ARN of the <code>LicenseConfiguration</code> object.</p>', 'ListAssociationsForLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>ARN of a <code>LicenseConfiguration</code> object.</p>', 'ListAssociationsForLicenseConfigurationRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListAssociationsForLicenseConfigurationResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseConfigurationsRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseConfigurationsResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseSpecificationsForResourceRequest$ResourceArn' => '<p>ARN of an AMI or Amazon EC2 instance that has an associated license configuration.</p>', 'ListLicenseSpecificationsForResourceRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListLicenseSpecificationsForResourceResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListResourceInventoryRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListResourceInventoryResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ListTagsForResourceRequest$ResourceArn' => '<p>ARN for the resource.</p>', 'ListUsageForLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>ARN of the targeted <code>LicenseConfiguration</code> object.</p>', 'ListUsageForLicenseConfigurationRequest$NextToken' => '<p>Token for the next set of results.</p>', 'ListUsageForLicenseConfigurationResponse$NextToken' => '<p>Token for the next set of results.</p>', 'ResourceInventory$ResourceId' => '<p>Unique ID of the resource.</p>', 'ResourceInventory$ResourceArn' => '<p>The ARN of the resource.</p>', 'ResourceInventory$Platform' => '<p>The platform of the resource.</p>', 'ResourceInventory$PlatformVersion' => '<p>Platform version of the resource in the inventory.</p>', 'ResourceInventory$ResourceOwningAccountId' => '<p>Unique ID of the account that owns the resource.</p>', 'StringList$member' => NULL, 'Tag$Key' => '<p>Key for the resource tag.</p>', 'Tag$Value' => '<p>Value for the resource tag.</p>', 'TagKeyList$member' => NULL, 'TagResourceRequest$ResourceArn' => '<p>Resource of the ARN to be tagged.</p>', 'UntagResourceRequest$ResourceArn' => '<p>ARN of the resource.</p>', 'UpdateLicenseConfigurationRequest$LicenseConfigurationArn' => '<p>ARN for a license configuration.</p>', 'UpdateLicenseConfigurationRequest$Name' => '<p>New name of the license configuration.</p>', 'UpdateLicenseConfigurationRequest$Description' => '<p>New human-friendly description of the license configuration.</p>', 'UpdateLicenseSpecificationsForResourceRequest$ResourceArn' => '<p>ARN for an AWS server resource.</p>', 'UpdateServiceSettingsRequest$S3BucketArn' => '<p>ARN of the Amazon S3 bucket where License Manager information is stored.</p>', 'UpdateServiceSettingsRequest$SnsTopicArn' => '<p>ARN of the Amazon SNS topic used for License Manager alerts.</p>', ], ], 'StringList' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$LicenseRules' => '<p>Array of configured License Manager rules.</p>', 'GetLicenseConfigurationResponse$LicenseRules' => '<p>List of flexible text strings designating license rules.</p>', 'LicenseConfiguration$LicenseRules' => '<p>Array of configured License Manager rules.</p>', 'ListLicenseConfigurationsRequest$LicenseConfigurationArns' => '<p>An array of ARNs for the calling account’s license configurations.</p>', 'UpdateLicenseConfigurationRequest$LicenseRules' => '<p>List of flexible text strings designating license rules.</p>', ], ], 'Tag' => [ 'base' => '<p>Tag for a resource in a key-value format.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>List keys identifying tags to remove.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'CreateLicenseConfigurationRequest$Tags' => '<p>The tags to apply to the resources during launch. You can only tag instances and volumes on launch. The specified tags are applied to all instances or volumes that are created during launch. To tag a resource after it has been created, see CreateTags .</p> <p/>', 'GetLicenseConfigurationResponse$Tags' => '<p>List of tags attached to the license configuration.</p>', 'ListTagsForResourceResponse$Tags' => '<p>List of tags attached to the resource.</p>', 'TagResourceRequest$Tags' => '<p>Names of the tags to attach to the resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseSpecificationsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateLicenseSpecificationsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateServiceSettingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateServiceSettingsResponse' => [ 'base' => NULL, 'refs' => [], ], ],];