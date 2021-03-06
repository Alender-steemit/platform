<?php
namespace Aws\Iot;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT** service.
 *
 * @method \Aws\Result acceptCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptCertificateTransferAsync(array $args = [])
 * @method \Aws\Result attachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPrincipalPolicyAsync(array $args = [])
 * @method \Aws\Result attachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachThingPrincipalAsync(array $args = [])
 * @method \Aws\Result cancelCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCertificateTransferAsync(array $args = [])
 * @method \Aws\Result createCertificateFromCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateFromCsrAsync(array $args = [])
 * @method \Aws\Result createKeysAndCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeysAndCertificateAsync(array $args = [])
 * @method \Aws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \Aws\Result createPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \Aws\Result createThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingAsync(array $args = [])
 * @method \Aws\Result createThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingTypeAsync(array $args = [])
 * @method \Aws\Result createTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTopicRuleAsync(array $args = [])
 * @method \Aws\Result deleteCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCACertificateAsync(array $args = [])
 * @method \Aws\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Aws\Result deletePolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \Aws\Result deleteRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationCodeAsync(array $args = [])
 * @method \Aws\Result deleteThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingAsync(array $args = [])
 * @method \Aws\Result deleteThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingTypeAsync(array $args = [])
 * @method \Aws\Result deleteTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicRuleAsync(array $args = [])
 * @method \Aws\Result deprecateThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateThingTypeAsync(array $args = [])
 * @method \Aws\Result describeCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCACertificateAsync(array $args = [])
 * @method \Aws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \Aws\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \Aws\Result describeThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingAsync(array $args = [])
 * @method \Aws\Result describeThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingTypeAsync(array $args = [])
 * @method \Aws\Result detachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPrincipalPolicyAsync(array $args = [])
 * @method \Aws\Result detachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachThingPrincipalAsync(array $args = [])
 * @method \Aws\Result disableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableTopicRuleAsync(array $args = [])
 * @method \Aws\Result enableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableTopicRuleAsync(array $args = [])
 * @method \Aws\Result getLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \Aws\Result getPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \Aws\Result getRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistrationCodeAsync(array $args = [])
 * @method \Aws\Result getTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicRuleAsync(array $args = [])
 * @method \Aws\Result listCACertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCACertificatesAsync(array $args = [])
 * @method \Aws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \Aws\Result listCertificatesByCA(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesByCAAsync(array $args = [])
 * @method \Aws\Result listOutgoingCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOutgoingCertificatesAsync(array $args = [])
 * @method \Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \Aws\Result listPolicyPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyPrincipalsAsync(array $args = [])
 * @method \Aws\Result listPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \Aws\Result listPrincipalPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalPoliciesAsync(array $args = [])
 * @method \Aws\Result listPrincipalThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalThingsAsync(array $args = [])
 * @method \Aws\Result listThingPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingPrincipalsAsync(array $args = [])
 * @method \Aws\Result listThingTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingTypesAsync(array $args = [])
 * @method \Aws\Result listThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingsAsync(array $args = [])
 * @method \Aws\Result listTopicRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTopicRulesAsync(array $args = [])
 * @method \Aws\Result registerCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCACertificateAsync(array $args = [])
 * @method \Aws\Result registerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \Aws\Result rejectCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectCertificateTransferAsync(array $args = [])
 * @method \Aws\Result replaceTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceTopicRuleAsync(array $args = [])
 * @method \Aws\Result setDefaultPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \Aws\Result setLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result transferCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferCertificateAsync(array $args = [])
 * @method \Aws\Result updateCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCACertificateAsync(array $args = [])
 * @method \Aws\Result updateCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAsync(array $args = [])
 * @method \Aws\Result updateThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingAsync(array $args = [])
 */
class IotClient extends AwsClient {}
