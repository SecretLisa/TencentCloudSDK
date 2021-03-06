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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探测任务
 *
 * @method string getName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method integer getTaskType() 获取任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型
 * @method array getNodes() 获取探测节点列表
 * @method void setNodes(array $Nodes) 设置探测节点列表
 * @method integer getInterval() 获取探测间隔
 * @method void setInterval(integer $Interval) 设置探测间隔
 * @method string getParameters() 获取探测参数
 * @method void setParameters(string $Parameters) 设置探测参数
 * @method integer getStatus() 获取任务状态
 * @method void setStatus(integer $Status) 设置任务状态
 * @method string getTargetAddress() 获取目标地址
 * @method void setTargetAddress(string $TargetAddress) 设置目标地址
 * @method integer getPayMode() 获取付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method void setPayMode(integer $PayMode) 设置付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method integer getOrderState() 获取订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
 * @method void setOrderState(integer $OrderState) 设置订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
 * @method integer getTaskCategory() 获取任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method void setTaskCategory(integer $TaskCategory) 设置任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getCron() 获取定时任务cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCron(string $Cron) 设置定时任务cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCronState() 获取定时任务启动状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronState(integer $CronState) 设置定时任务启动状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProbeTask extends AbstractModel
{
    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var integer 任务类型
     */
    public $TaskType;

    /**
     * @var array 探测节点列表
     */
    public $Nodes;

    /**
     * @var integer 探测间隔
     */
    public $Interval;

    /**
     * @var string 探测参数
     */
    public $Parameters;

    /**
     * @var integer 任务状态
     */
    public $Status;

    /**
     * @var string 目标地址
     */
    public $TargetAddress;

    /**
     * @var integer 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     */
    public $PayMode;

    /**
     * @var integer 订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
     */
    public $OrderState;

    /**
     * @var integer 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     */
    public $TaskCategory;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 定时任务cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cron;

    /**
     * @var integer 定时任务启动状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronState;

    /**
     * @param string $Name 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务 ID
     * @param integer $TaskType 任务类型
     * @param array $Nodes 探测节点列表
     * @param integer $Interval 探测间隔
     * @param string $Parameters 探测参数
     * @param integer $Status 任务状态
     * @param string $TargetAddress 目标地址
     * @param integer $PayMode 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     * @param integer $OrderState 订单状态
<li>1 = 正常</li>
<li> 2 = 欠费 </li>
     * @param integer $TaskCategory 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     * @param string $CreatedAt 创建时间
     * @param string $Cron 定时任务cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CronState 定时任务启动状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("OrderState",$param) and $param["OrderState"] !== null) {
            $this->OrderState = $param["OrderState"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("CronState",$param) and $param["CronState"] !== null) {
            $this->CronState = $param["CronState"];
        }
    }
}
