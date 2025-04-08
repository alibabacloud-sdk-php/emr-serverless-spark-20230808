<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\AddMembersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetCuHoursRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetCuHoursResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetDoctorApplicationRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetDoctorApplicationResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartProcessInstanceRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartProcessInstanceResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StopSessionClusterResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\TerminateSqlStatementResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Emrserverlessspark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr-serverless-spark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds a RAM user or RAM role to a workspace as a member.
     *
     * @param request - AddMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMembersResponse
     *
     * @param AddMembersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddMembersResponse
     */
    public function addMembersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->memberArns) {
            @$body['memberArns'] = $request->memberArns;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMembers',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/auth/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a RAM user or RAM role to a workspace as a member.
     *
     * @param request - AddMembersRequest
     *
     * @returns AddMembersResponse
     *
     * @param AddMembersRequest $request
     *
     * @return AddMembersResponse
     */
    public function addMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * Terminates a Spark job.
     *
     * @param request - CancelJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelJobRunResponse
     *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CancelJobRunResponse
     */
    public function cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns/' . Url::percentEncode($jobRunId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelJobRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Terminates a Spark job.
     *
     * @param request - CancelJobRunRequest
     *
     * @returns CancelJobRunResponse
     *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request
     *
     * @return CancelJobRunResponse
     */
    public function cancelJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * Creates a workflow.
     *
     * @param tmpReq - CreateProcessDefinitionWithScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param CreateProcessDefinitionWithScheduleRequest $tmpReq
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateProcessDefinitionWithScheduleResponse
     */
    public function createProcessDefinitionWithScheduleWithOptions($bizId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProcessDefinitionWithScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalParams) {
            $request->globalParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalParams, 'globalParams', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'schedule', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        if (null !== $tmpReq->taskDefinitionJson) {
            $request->taskDefinitionJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDefinitionJson, 'taskDefinitionJson', 'json');
        }

        if (null !== $tmpReq->taskRelationJson) {
            $request->taskRelationJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskRelationJson, 'taskRelationJson', 'json');
        }

        $query = [];
        if (null !== $request->alertEmailAddress) {
            @$query['alertEmailAddress'] = $request->alertEmailAddress;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->globalParamsShrink) {
            @$query['globalParams'] = $request->globalParamsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->publish) {
            @$query['publish'] = $request->publish;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceQueue) {
            @$query['resourceQueue'] = $request->resourceQueue;
        }

        if (null !== $request->retryTimes) {
            @$query['retryTimes'] = $request->retryTimes;
        }

        if (null !== $request->runAs) {
            @$query['runAs'] = $request->runAs;
        }

        if (null !== $request->scheduleShrink) {
            @$query['schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDefinitionJsonShrink) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJsonShrink;
        }

        if (null !== $request->taskParallelism) {
            @$query['taskParallelism'] = $request->taskParallelism;
        }

        if (null !== $request->taskRelationJsonShrink) {
            @$query['taskRelationJson'] = $request->taskRelationJsonShrink;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProcessDefinitionWithSchedule',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/process-definition',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProcessDefinitionWithScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProcessDefinitionWithScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workflow.
     *
     * @param request - CreateProcessDefinitionWithScheduleRequest
     *
     * @returns CreateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param CreateProcessDefinitionWithScheduleRequest $request
     *
     * @return CreateProcessDefinitionWithScheduleResponse
     */
    public function createProcessDefinitionWithSchedule($bizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProcessDefinitionWithScheduleWithOptions($bizId, $request, $headers, $runtime);
    }

    /**
     * Creates a session.
     *
     * @param request - CreateSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $workspaceId
     * @param CreateSessionClusterRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->applicationConfigs) {
            @$body['applicationConfigs'] = $request->applicationConfigs;
        }

        if (null !== $request->autoStartConfiguration) {
            @$body['autoStartConfiguration'] = $request->autoStartConfiguration;
        }

        if (null !== $request->autoStopConfiguration) {
            @$body['autoStopConfiguration'] = $request->autoStopConfiguration;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->envId) {
            @$body['envId'] = $request->envId;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->kind) {
            @$body['kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSessionClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a session.
     *
     * @param request - CreateSessionClusterRequest
     *
     * @returns CreateSessionClusterResponse
     *
     * @param string                      $workspaceId
     * @param CreateSessionClusterRequest $request
     *
     * @return CreateSessionClusterResponse
     */
    public function createSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an SQL query task.
     *
     * @param request - CreateSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSqlStatementResponse
     *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSqlStatementResponse
     */
    public function createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->codeContent) {
            @$body['codeContent'] = $request->codeContent;
        }

        if (null !== $request->defaultCatalog) {
            @$body['defaultCatalog'] = $request->defaultCatalog;
        }

        if (null !== $request->defaultDatabase) {
            @$body['defaultDatabase'] = $request->defaultDatabase;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->sqlComputeId) {
            @$body['sqlComputeId'] = $request->sqlComputeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSqlStatementResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an SQL query task.
     *
     * @param request - CreateSqlStatementRequest
     *
     * @returns CreateSqlStatementResponse
     *
     * @param string                    $workspaceId
     * @param CreateSqlStatementRequest $request
     *
     * @return CreateSqlStatementResponse
     */
    public function createSqlStatement($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlStatementWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a workspace.
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['autoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->autoRenewPeriodUnit) {
            @$body['autoRenewPeriodUnit'] = $request->autoRenewPeriodUnit;
        }

        if (null !== $request->autoStartSessionCluster) {
            @$body['autoStartSessionCluster'] = $request->autoStartSessionCluster;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dlfCatalogId) {
            @$body['dlfCatalogId'] = $request->dlfCatalogId;
        }

        if (null !== $request->dlfType) {
            @$body['dlfType'] = $request->dlfType;
        }

        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->ossBucket) {
            @$body['ossBucket'] = $request->ossBucket;
        }

        if (null !== $request->paymentDurationUnit) {
            @$body['paymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->ramRoleName) {
            @$body['ramRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->releaseType) {
            @$body['releaseType'] = $request->releaseType;
        }

        if (null !== $request->resourceSpec) {
            @$body['resourceSpec'] = $request->resourceSpec;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        if (null !== $request->workspaceName) {
            @$body['workspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workspace.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the number of CU-hours consumed by a queue during a specified cycle.
     *
     * @param request - GetCuHoursRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCuHoursResponse
     *
     * @param string            $workspaceId
     * @param string            $queue
     * @param GetCuHoursRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetCuHoursResponse
     */
    public function getCuHoursWithOptions($workspaceId, $queue, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCuHours',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/metric/cuHours/' . Url::percentEncode($queue) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCuHoursResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCuHoursResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the number of CU-hours consumed by a queue during a specified cycle.
     *
     * @param request - GetCuHoursRequest
     *
     * @returns GetCuHoursResponse
     *
     * @param string            $workspaceId
     * @param string            $queue
     * @param GetCuHoursRequest $request
     *
     * @return GetCuHoursResponse
     */
    public function getCuHours($workspaceId, $queue, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCuHoursWithOptions($workspaceId, $queue, $request, $headers, $runtime);
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @param request - GetDoctorApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDoctorApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $runId
     * @param GetDoctorApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplicationWithOptions($workspaceId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->locale) {
            @$query['locale'] = $request->locale;
        }

        if (null !== $request->queryTime) {
            @$query['queryTime'] = $request->queryTime;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDoctorApplication',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/runs/' . Url::percentEncode($runId) . '/action/getDoctorApplication',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @param request - GetDoctorApplicationRequest
     *
     * @returns GetDoctorApplicationResponse
     *
     * @param string                      $workspaceId
     * @param string                      $runId
     * @param GetDoctorApplicationRequest $request
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplication($workspaceId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDoctorApplicationWithOptions($workspaceId, $runId, $request, $headers, $runtime);
    }

    /**
     * Obtain the job details.
     *
     * @param request - GetJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobRunResponse
     *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobRunResponse
     */
    public function getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns/' . Url::percentEncode($jobRunId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetJobRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain the job details.
     *
     * @param request - GetJobRunRequest
     *
     * @returns GetJobRunResponse
     *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request
     *
     * @return GetJobRunResponse
     */
    public function getJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a session.
     *
     * @param request - GetSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionClusterResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/' . Url::percentEncode($sessionClusterId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSessionClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a session.
     *
     * @param request - GetSessionClusterRequest
     *
     * @returns GetSessionClusterResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sessionClusterId
     * @param GetSessionClusterRequest $request
     *
     * @return GetSessionClusterResponse
     */
    public function getSessionCluster($workspaceId, $sessionClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSessionClusterWithOptions($workspaceId, $sessionClusterId, $request, $headers, $runtime);
    }

    /**
     * Queries the status of an SQL query task.
     *
     * @param request - GetSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlStatementResponse
     *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSqlStatementResponse
     */
    public function getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement/' . Url::percentEncode($statementId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSqlStatementResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of an SQL query task.
     *
     * @param request - GetSqlStatementRequest
     *
     * @returns GetSqlStatementResponse
     *
     * @param string                 $workspaceId
     * @param string                 $statementId
     * @param GetSqlStatementRequest $request
     *
     * @return GetSqlStatementResponse
     */
    public function getSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }

    /**
     * Queries task templates.
     *
     * @param request - GetTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param string             $workspaceBizId
     * @param GetTemplateRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($workspaceBizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->templateType) {
            @$query['templateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceBizId) . '/template',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries task templates.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param string             $workspaceBizId
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($workspaceBizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($workspaceBizId, $request, $headers, $runtime);
    }

    /**
     * Assigns a specified role to users.
     *
     * @param request - GrantRoleToUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        if (null !== $request->userArns) {
            @$body['userArns'] = $request->userArns;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantRoleToUsers',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/auth/roles/grant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GrantRoleToUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GrantRoleToUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Assigns a specified role to users.
     *
     * @param request - GrantRoleToUsersRequest
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleToUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of Spark jobs.
     *
     * @param tmpReq - ListJobRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobRunsResponse
     *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListJobRunsResponse
     */
    public function listJobRunsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobRunsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->endTime) {
            $request->endTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->endTime, 'endTime', 'json');
        }

        if (null !== $tmpReq->startTime) {
            $request->startTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }

        if (null !== $tmpReq->states) {
            $request->statesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->states, 'states', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->creator) {
            @$query['creator'] = $request->creator;
        }

        if (null !== $request->endTimeShrink) {
            @$query['endTime'] = $request->endTimeShrink;
        }

        if (null !== $request->jobRunDeploymentId) {
            @$query['jobRunDeploymentId'] = $request->jobRunDeploymentId;
        }

        if (null !== $request->jobRunId) {
            @$query['jobRunId'] = $request->jobRunId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->minDuration) {
            @$query['minDuration'] = $request->minDuration;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceQueueId) {
            @$query['resourceQueueId'] = $request->resourceQueueId;
        }

        if (null !== $request->startTimeShrink) {
            @$query['startTime'] = $request->startTimeShrink;
        }

        if (null !== $request->statesShrink) {
            @$query['states'] = $request->statesShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobRuns',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListJobRunsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListJobRunsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of Spark jobs.
     *
     * @param request - ListJobRunsRequest
     *
     * @returns ListJobRunsResponse
     *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $request
     *
     * @return ListJobRunsResponse
     */
    public function listJobRuns($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobRunsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the applications that are submitted by using a Kyuubi gateway.
     *
     * @param tmpReq - ListKyuubiSparkApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKyuubiSparkApplicationsResponse
     *
     * @param string                             $workspaceId
     * @param string                             $kyuubiServiceId
     * @param ListKyuubiSparkApplicationsRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListKyuubiSparkApplicationsResponse
     */
    public function listKyuubiSparkApplicationsWithOptions($workspaceId, $kyuubiServiceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListKyuubiSparkApplicationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->startTime) {
            $request->startTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }

        $query = [];
        if (null !== $request->applicationId) {
            @$query['applicationId'] = $request->applicationId;
        }

        if (null !== $request->applicationName) {
            @$query['applicationName'] = $request->applicationName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTimeShrink) {
            @$query['startTime'] = $request->startTimeShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKyuubiSparkApplications',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/kyuubi/' . Url::percentEncode($workspaceId) . '/' . Url::percentEncode($kyuubiServiceId) . '/applications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListKyuubiSparkApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKyuubiSparkApplicationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the applications that are submitted by using a Kyuubi gateway.
     *
     * @param request - ListKyuubiSparkApplicationsRequest
     *
     * @returns ListKyuubiSparkApplicationsResponse
     *
     * @param string                             $workspaceId
     * @param string                             $kyuubiServiceId
     * @param ListKyuubiSparkApplicationsRequest $request
     *
     * @return ListKyuubiSparkApplicationsResponse
     */
    public function listKyuubiSparkApplications($workspaceId, $kyuubiServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKyuubiSparkApplicationsWithOptions($workspaceId, $kyuubiServiceId, $request, $headers, $runtime);
    }

    /**
     * Get Log Content.
     *
     * @param request - ListLogContentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogContentsResponse
     *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogContentsResponse
     */
    public function listLogContentsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->length) {
            @$query['length'] = $request->length;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogContents',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/action/listLogContents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLogContentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLogContentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get Log Content.
     *
     * @param request - ListLogContentsRequest
     *
     * @returns ListLogContentsResponse
     *
     * @param string                 $workspaceId
     * @param ListLogContentsRequest $request
     *
     * @return ListLogContentsResponse
     */
    public function listLogContents($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogContentsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *
     * @param request - ListReleaseVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->releaseType) {
            @$query['releaseType'] = $request->releaseType;
        }

        if (null !== $request->releaseVersion) {
            @$query['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->releaseVersionStatus) {
            @$query['releaseVersionStatus'] = $request->releaseVersionStatus;
        }

        if (null !== $request->serviceFilter) {
            @$query['serviceFilter'] = $request->serviceFilter;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListReleaseVersions',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/releaseVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListReleaseVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of published versions of E-MapReduce (EMR) Serverless Spark.
     *
     * @param request - ListReleaseVersionsRequest
     *
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReleaseVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of sessions.
     *
     * @param request - ListSessionClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSessionClustersResponse
     *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kind) {
            @$query['kind'] = $request->kind;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->queueName) {
            @$query['queueName'] = $request->queueName;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->sessionClusterId) {
            @$query['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSessionClusters',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSessionClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSessionClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of sessions.
     *
     * @param request - ListSessionClustersRequest
     *
     * @returns ListSessionClustersResponse
     *
     * @param string                     $workspaceId
     * @param ListSessionClustersRequest $request
     *
     * @return ListSessionClustersResponse
     */
    public function listSessionClusters($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSessionClustersWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of queues in a Spark workspace.
     *
     * @param request - ListWorkspaceQueuesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspaceQueuesResponse
     *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['environment'] = $request->environment;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaceQueues',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/queues',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkspaceQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkspaceQueuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of queues in a Spark workspace.
     *
     * @param request - ListWorkspaceQueuesRequest
     *
     * @returns ListWorkspaceQueuesResponse
     *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request
     *
     * @return ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueues($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of workspaces.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkspacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of workspaces.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * Starts a Spark job.
     *
     * @param request - StartJobRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartJobRunResponse
     *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StartJobRunResponse
     */
    public function startJobRunWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->codeType) {
            @$body['codeType'] = $request->codeType;
        }

        if (null !== $request->configurationOverrides) {
            @$body['configurationOverrides'] = $request->configurationOverrides;
        }

        if (null !== $request->displayReleaseVersion) {
            @$body['displayReleaseVersion'] = $request->displayReleaseVersion;
        }

        if (null !== $request->executionTimeoutSeconds) {
            @$body['executionTimeoutSeconds'] = $request->executionTimeoutSeconds;
        }

        if (null !== $request->fusion) {
            @$body['fusion'] = $request->fusion;
        }

        if (null !== $request->jobDriver) {
            @$body['jobDriver'] = $request->jobDriver;
        }

        if (null !== $request->jobId) {
            @$body['jobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->releaseVersion) {
            @$body['releaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resourceQueueId) {
            @$body['resourceQueueId'] = $request->resourceQueueId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartJobRun',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/jobRuns',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartJobRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a Spark job.
     *
     * @param request - StartJobRunRequest
     *
     * @returns StartJobRunResponse
     *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request
     *
     * @return StartJobRunResponse
     */
    public function startJobRun($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startJobRunWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Manually runs a workflow.
     *
     * @param request - StartProcessInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartProcessInstanceResponse
     *
     * @param string                      $bizId
     * @param StartProcessInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return StartProcessInstanceResponse
     */
    public function startProcessInstanceWithOptions($bizId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        if (null !== $request->comments) {
            @$query['comments'] = $request->comments;
        }

        if (null !== $request->email) {
            @$query['email'] = $request->email;
        }

        if (null !== $request->interval) {
            @$query['interval'] = $request->interval;
        }

        if (null !== $request->isProd) {
            @$query['isProd'] = $request->isProd;
        }

        if (null !== $request->processDefinitionCode) {
            @$query['processDefinitionCode'] = $request->processDefinitionCode;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->runtimeQueue) {
            @$query['runtimeQueue'] = $request->runtimeQueue;
        }

        if (null !== $request->versionHashCode) {
            @$query['versionHashCode'] = $request->versionHashCode;
        }

        if (null !== $request->versionNumber) {
            @$query['versionNumber'] = $request->versionNumber;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartProcessInstance',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/executors/start-process-instance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartProcessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartProcessInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Manually runs a workflow.
     *
     * @param request - StartProcessInstanceRequest
     *
     * @returns StartProcessInstanceResponse
     *
     * @param string                      $bizId
     * @param StartProcessInstanceRequest $request
     *
     * @return StartProcessInstanceResponse
     */
    public function startProcessInstance($bizId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startProcessInstanceWithOptions($bizId, $request, $headers, $runtime);
    }

    /**
     * Starts a session.
     *
     * @param request - StartSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSessionClusterResponse
     *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->sessionClusterId) {
            @$body['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/action/startSessionCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartSessionClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a session.
     *
     * @param request - StartSessionClusterRequest
     *
     * @returns StartSessionClusterResponse
     *
     * @param string                     $workspaceId
     * @param StartSessionClusterRequest $request
     *
     * @return StartSessionClusterResponse
     */
    public function startSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Stops a session.
     *
     * @param request - StopSessionClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSessionClusterResponse
     *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->queueName) {
            @$body['queueName'] = $request->queueName;
        }

        if (null !== $request->sessionClusterId) {
            @$body['sessionClusterId'] = $request->sessionClusterId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopSessionCluster',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/workspaces/' . Url::percentEncode($workspaceId) . '/sessionClusters/action/stopSessionCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopSessionClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopSessionClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a session.
     *
     * @param request - StopSessionClusterRequest
     *
     * @returns StopSessionClusterResponse
     *
     * @param string                    $workspaceId
     * @param StopSessionClusterRequest $request
     *
     * @return StopSessionClusterResponse
     */
    public function stopSessionCluster($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSessionClusterWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Terminates an SQL query task.
     *
     * @param request - TerminateSqlStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateSqlStatementResponse
     *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TerminateSqlStatementResponse
     */
    public function terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TerminateSqlStatement',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/interactive/v1/workspace/' . Url::percentEncode($workspaceId) . '/statement/' . Url::percentEncode($statementId) . '/terminate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TerminateSqlStatementResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TerminateSqlStatementResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Terminates an SQL query task.
     *
     * @param request - TerminateSqlStatementRequest
     *
     * @returns TerminateSqlStatementResponse
     *
     * @param string                       $workspaceId
     * @param string                       $statementId
     * @param TerminateSqlStatementRequest $request
     *
     * @return TerminateSqlStatementResponse
     */
    public function terminateSqlStatement($workspaceId, $statementId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->terminateSqlStatementWithOptions($workspaceId, $statementId, $request, $headers, $runtime);
    }

    /**
     * Updates the workflow and time-based scheduling configurations.
     *
     * @param tmpReq - UpdateProcessDefinitionWithScheduleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param string                                     $code
     * @param UpdateProcessDefinitionWithScheduleRequest $tmpReq
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateProcessDefinitionWithScheduleResponse
     */
    public function updateProcessDefinitionWithScheduleWithOptions($bizId, $code, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProcessDefinitionWithScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalParams) {
            $request->globalParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalParams, 'globalParams', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'schedule', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        if (null !== $tmpReq->taskDefinitionJson) {
            $request->taskDefinitionJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskDefinitionJson, 'taskDefinitionJson', 'json');
        }

        if (null !== $tmpReq->taskRelationJson) {
            $request->taskRelationJsonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskRelationJson, 'taskRelationJson', 'json');
        }

        $query = [];
        if (null !== $request->alertEmailAddress) {
            @$query['alertEmailAddress'] = $request->alertEmailAddress;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->globalParamsShrink) {
            @$query['globalParams'] = $request->globalParamsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->productNamespace) {
            @$query['productNamespace'] = $request->productNamespace;
        }

        if (null !== $request->publish) {
            @$query['publish'] = $request->publish;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->releaseState) {
            @$query['releaseState'] = $request->releaseState;
        }

        if (null !== $request->resourceQueue) {
            @$query['resourceQueue'] = $request->resourceQueue;
        }

        if (null !== $request->retryTimes) {
            @$query['retryTimes'] = $request->retryTimes;
        }

        if (null !== $request->runAs) {
            @$query['runAs'] = $request->runAs;
        }

        if (null !== $request->scheduleShrink) {
            @$query['schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDefinitionJsonShrink) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJsonShrink;
        }

        if (null !== $request->taskParallelism) {
            @$query['taskParallelism'] = $request->taskParallelism;
        }

        if (null !== $request->taskRelationJsonShrink) {
            @$query['taskRelationJson'] = $request->taskRelationJsonShrink;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProcessDefinitionWithSchedule',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/projects/' . Url::percentEncode($bizId) . '/process-definition/' . Url::percentEncode($code) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProcessDefinitionWithScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProcessDefinitionWithScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the workflow and time-based scheduling configurations.
     *
     * @param request - UpdateProcessDefinitionWithScheduleRequest
     *
     * @returns UpdateProcessDefinitionWithScheduleResponse
     *
     * @param string                                     $bizId
     * @param string                                     $code
     * @param UpdateProcessDefinitionWithScheduleRequest $request
     *
     * @return UpdateProcessDefinitionWithScheduleResponse
     */
    public function updateProcessDefinitionWithSchedule($bizId, $code, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProcessDefinitionWithScheduleWithOptions($bizId, $code, $request, $headers, $runtime);
    }
}
