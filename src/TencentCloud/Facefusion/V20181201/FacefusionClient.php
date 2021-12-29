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

namespace TencentCloud\Facefusion\V20181201;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Facefusion\V20181201\Models as Models;

/**
 * @method Models\CancelVideoFaceFusionJobResponse CancelVideoFaceFusionJob(Models\CancelVideoFaceFusionJobRequest $req) 通过JobId撤销视频人脸融合任务
 * @method Models\QueryVideoFaceFusionJobResponse QueryVideoFaceFusionJob(Models\QueryVideoFaceFusionJobRequest $req) 通过Job Id查询视频人脸融合任务的进度和状态
 * @method Models\SubmitVideoFaceFusionJobResponse SubmitVideoFaceFusionJob(Models\SubmitVideoFaceFusionJobRequest $req) 视频人脸融合异步处理任务，成功提交任务后返回任务的Job id 、预计完成时间以及目前队列长度。
 */

class FacefusionClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "facefusion.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "facefusion";

    /**
     * @var string
     */
    protected $version = "2018-12-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("facefusion")."\\"."V20181201\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
