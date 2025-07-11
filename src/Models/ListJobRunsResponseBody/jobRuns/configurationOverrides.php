<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponseBody\jobRuns;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Configuration;

class configurationOverrides extends Model
{
    /**
     * @var Configuration[]
     */
    public $configurations;
    protected $_name = [
        'configurations' => 'configurations',
    ];

    public function validate()
    {
        if (\is_array($this->configurations)) {
            Model::validateArray($this->configurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurations) {
            if (\is_array($this->configurations)) {
                $res['configurations'] = [];
                $n1 = 0;
                foreach ($this->configurations as $item1) {
                    $res['configurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configurations'])) {
            if (!empty($map['configurations'])) {
                $model->configurations = [];
                $n1 = 0;
                foreach ($map['configurations'] as $item1) {
                    $model->configurations[$n1] = Configuration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
