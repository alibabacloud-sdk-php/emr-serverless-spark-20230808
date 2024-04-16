<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class RunLog extends Model
{
    /**
     * @var string
     */
    public $driverStdError;

    /**
     * @var string
     */
    public $driverStdOut;
    protected $_name = [
        'driverStdError' => 'driverStdError',
        'driverStdOut'   => 'driverStdOut',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverStdError) {
            $res['driverStdError'] = $this->driverStdError;
        }
        if (null !== $this->driverStdOut) {
            $res['driverStdOut'] = $this->driverStdOut;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['driverStdError'])) {
            $model->driverStdError = $map['driverStdError'];
        }
        if (isset($map['driverStdOut'])) {
            $model->driverStdOut = $map['driverStdOut'];
        }

        return $model;
    }
}
