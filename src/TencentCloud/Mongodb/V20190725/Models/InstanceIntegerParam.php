<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可修改参数integer类型集合。
 *
 * @method string getCurrentValue() 获取当前值
 * @method void setCurrentValue(string $CurrentValue) 设置当前值
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getMax() 获取最大值
 * @method void setMax(string $Max) 设置最大值
 * @method string getMin() 获取最小值
 * @method void setMin(string $Min) 设置最小值
 * @method string getNeedRestart() 获取是否徐亚哦重启后生效 1:需要重启；0:无需重启
 * @method void setNeedRestart(string $NeedRestart) 设置是否徐亚哦重启后生效 1:需要重启；0:无需重启
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method array getTips() 获取参数说明
 * @method void setTips(array $Tips) 设置参数说明
 * @method string getValueType() 获取参数类型
 * @method void setValueType(string $ValueType) 设置参数类型
 * @method integer getStatus() 获取是否正常获取到，1：未正常获取；0：正常获取，仅对前端有实际意义；
 * @method void setStatus(integer $Status) 设置是否正常获取到，1：未正常获取；0：正常获取，仅对前端有实际意义；
 * @method string getUnit() 获取暂时未用到，前端使用redis侧代码，为了兼容，保留该参数
 * @method void setUnit(string $Unit) 设置暂时未用到，前端使用redis侧代码，为了兼容，保留该参数
 */
class InstanceIntegerParam extends AbstractModel
{
    /**
     * @var string 当前值
     */
    public $CurrentValue;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 最大值
     */
    public $Max;

    /**
     * @var string 最小值
     */
    public $Min;

    /**
     * @var string 是否徐亚哦重启后生效 1:需要重启；0:无需重启
     */
    public $NeedRestart;

    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var array 参数说明
     */
    public $Tips;

    /**
     * @var string 参数类型
     */
    public $ValueType;

    /**
     * @var integer 是否正常获取到，1：未正常获取；0：正常获取，仅对前端有实际意义；
     */
    public $Status;

    /**
     * @var string 暂时未用到，前端使用redis侧代码，为了兼容，保留该参数
     */
    public $Unit;

    /**
     * @param string $CurrentValue 当前值
     * @param string $DefaultValue 默认值
     * @param string $Max 最大值
     * @param string $Min 最小值
     * @param string $NeedRestart 是否徐亚哦重启后生效 1:需要重启；0:无需重启
     * @param string $ParamName 参数名称
     * @param array $Tips 参数说明
     * @param string $ValueType 参数类型
     * @param integer $Status 是否正常获取到，1：未正常获取；0：正常获取，仅对前端有实际意义；
     * @param string $Unit 暂时未用到，前端使用redis侧代码，为了兼容，保留该参数
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
