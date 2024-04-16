<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest\configurationOverrides;

use AlibabaCloud\Tea\Model;

class configurations extends Model
{
    /**
     * @example spark-default.conf
     *
     * @var string
     */
    public $configFileName;

    /**
     * @example spark.app.name
     *
     * @var string
     */
    public $configItemKey;

    /**
     * @example test_app
     *
     * @var string
     */
    public $configItemValue;
    protected $_name = [
        'configFileName'  => 'configFileName',
        'configItemKey'   => 'configItemKey',
        'configItemValue' => 'configItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFileName) {
            $res['configFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['configItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['configItemValue'] = $this->configItemValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configFileName'])) {
            $model->configFileName = $map['configFileName'];
        }
        if (isset($map['configItemKey'])) {
            $model->configItemKey = $map['configItemKey'];
        }
        if (isset($map['configItemValue'])) {
            $model->configItemValue = $map['configItemValue'];
        }

        return $model;
    }
}
