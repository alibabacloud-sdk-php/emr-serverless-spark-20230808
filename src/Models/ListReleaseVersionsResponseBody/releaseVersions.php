<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class releaseVersions extends Model
{
    /**
     * @example Spark 3.3.1
     *
     * @var string
     */
    public $communityVersion;

    /**
     * @var string[]
     */
    public $cpuArchitectures;

    /**
     * @example 1716215854101
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example ASI
     *
     * @var string
     */
    public $iaasType;

    /**
     * @example esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @example 2.12
     *
     * @var string
     */
    public $scalaVersion;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $state;

    /**
     * @example stable
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'communityVersion' => 'communityVersion',
        'cpuArchitectures' => 'cpuArchitectures',
        'gmtCreate'        => 'gmtCreate',
        'iaasType'         => 'iaasType',
        'releaseVersion'   => 'releaseVersion',
        'scalaVersion'     => 'scalaVersion',
        'state'            => 'state',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->communityVersion) {
            $res['communityVersion'] = $this->communityVersion;
        }
        if (null !== $this->cpuArchitectures) {
            $res['cpuArchitectures'] = $this->cpuArchitectures;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->iaasType) {
            $res['iaasType'] = $this->iaasType;
        }
        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->scalaVersion) {
            $res['scalaVersion'] = $this->scalaVersion;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['communityVersion'])) {
            $model->communityVersion = $map['communityVersion'];
        }
        if (isset($map['cpuArchitectures'])) {
            if (!empty($map['cpuArchitectures'])) {
                $model->cpuArchitectures = $map['cpuArchitectures'];
            }
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['iaasType'])) {
            $model->iaasType = $map['iaasType'];
        }
        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }
        if (isset($map['scalaVersion'])) {
            $model->scalaVersion = $map['scalaVersion'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
